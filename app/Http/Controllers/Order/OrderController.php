<?php

namespace App\Http\Controllers\Order;

use App\Cart\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Cart\Payments\Gateway;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Requests\OrderStoreRequest;
use App\Exceptions\PaymentFailedException;

class OrderController extends Controller
{
    protected $cart;
    protected $gateway;

    public function __construct(Cart $cart, Gateway $gateway)
    {
        $this->cart = $cart;
        $this->gateway = $gateway;
    }

    public function index(Request $request)
    {
        $orders = $request->user()->orders()->with(['shipping', 'products', 'billingAddress', 'deliveryAddress', 'products.attribute', 'products.attributeValue', 'products.option', 'products.optionValue', 'products.stock', 'products.product', 'deliveryAddress.city', 'billingAddress.city', 'products.product.variants', 'products.product.variants.stock'])->latest()->paginate(20);

        return OrderResource::collection($orders);
    }


    public function store(OrderStoreRequest $request)
    {
        $order = $this->createOrder($request);

        if ($request->has3ds) {
            $this->initialThreedPaymentCharge($request, $order);
            return print_r($this->gateway->getHtmlContent());
        }

        $this->gateway = $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->charge();

        $this->checkPayment($this->gateway, $order);

        $this->afterPayment($request, $order);
    }


    public function initialThreedPaymentCharge($request, $order)
    {
        $this->gateway = $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->initializeSecureCharge();

        $this->checkPayment($this->gateway, $order);
    }

    public function payment(Request $request)
    {
        $this->gateway = $this->gateway->withSecureOptions($request)->finishSecureCharge();
        $this->checkPayment($this->gateway, $request);
        $this->afterPayment($request);
    }

    protected function createOrder($request)
    {
        return $request->user()->orders()->create(
            array_merge(
                $request->only(['delivery_id', 'shipping_id', 'billing_id', 'pay_at_door']),
                [
                    'subtotal' => $this->cart->subtotal()->amount()
                ]
            )
        );
    }

    protected function afterPayment($request, $order = null)
    {
        if (!$order) {
            $order = Order::find($request->conversationId);
        }

        $order->update([
            'status' => Order::PROCESSING
        ]);

        $user = $order->user;

        $order->products()->sync($this->cart->products($user)->forSyncing());
        //forSyncing is a costum colleciton method

        OrderCreated::dispatch($order, $user);

        return new OrderResource($order);
    }

    protected function checkSecurePayment($gateway, $request)
    {
        if (!$gateway->checkSecurePaymentStatus()) {

            $order = Order::find($request->conversationId);

            $order->updateStatusPaymentFailed();

            return redirect('http://localhost:3000/odeme', [
                'status' => false,
                'message' => 'Banka 3d ödemesi sırasında hata oluştu.'
            ]);
        }
    }

    protected function checkPayment($gateway, $order)
    {
        if (!$gateway->checkStatus()) {

            $order->updateStatusPaymentFailed();

            throw new PaymentFailedException($gateway->getErrorMessage());
        }
    }
}

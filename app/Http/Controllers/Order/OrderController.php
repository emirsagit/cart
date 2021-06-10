<?php

namespace App\Http\Controllers\Order;

use Throwable;
use App\Cart\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Cart\Payments\Gateway;
use App\Events\Order\OrderPaid;
use App\Exceptions\Payment3dsecureFailed;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Requests\OrderStoreRequest;
use App\Exceptions\PaymentFailedException;

class OrderController extends Controller
{
    protected $cart;
    protected $gateway;
    protected $paymentResult;

    public function __construct(Cart $cart, Gateway $gateway)
    {
        $this->cart = $cart;
        $this->gateway = $gateway;
    }

    public function index(Request $request)
    {
        $orders = $request->user()->orders()->has('transactions')->with(['shipping', 'products', 'billingAddress', 'deliveryAddress', 'products.attribute', 'products.attributeValue', 'products.option', 'products.optionValue', 'products.stock', 'products.product', 'deliveryAddress.city', 'billingAddress.city', 'products.product.variants', 'products.product.variants.stock'])->latest()->paginate(20);

        return OrderResource::collection($orders);
    }

    public function show(Order $order)
    {
        return new OrderResource($order->load('products', 'deliveryAddress', 'billingAddress', 'shipping', 'products.product'));
    }


    public function store(OrderStoreRequest $request)
    {
        $order = $this->createOrder($request);

        if ($request->has3ds) {
            $this->gateway = $this->initialThreedPaymentCharge($request, $order);

            if (!$this->gateway->checkPayment()) {
                $this->paymentFailed($order);
            }

            return $this->gateway->get3dsHtmlContent();
        }

        $this->gateway = $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->charge();

        if (!$this->gateway->checkPayment()) {
            $this->paymentFailed($order);
        }

        $this->afterPayment($order);

        return new OrderResource($order);
    }

    public function finishThreedPaymentCharge(Request $request)
    {
        $order = Order::find($request->conversationId);

        if (!$this->gateway->checkSecurePaymentValidation($request)) {
            $this->payment3dsFailed($order, $request);
        }

        $this->gateway = $this->gateway->withSecureOptions($request, $order)->finishSecureCharge();

        if (!$this->gateway->checkPayment()) {
            $this->payment3dsFailed($order);
        }

        $this->afterPayment($order);

        return redirect("http://localhost:3000/odeme-sonrasi/order/{$order->id}");
    }

    protected function initialThreedPaymentCharge($request, $order)
    {
        return $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->initializeSecureCharge();
    }

    protected function paymentFailed($order)
    {
        $order->updateStatusPaymentFailed();

        $errorMessage = $this->gateway->logPaymentFailed($order);

        throw new PaymentFailedException($errorMessage);
    }

    protected function payment3dsFailed($order, $request = null)
    {
        $order->updateStatusPaymentFailed();

        $errorMessage = $this->gateway->logPaymentFailed($order, $request);

        throw new Payment3dsecureFailed($errorMessage);
    }


    protected function afterPayment(Order $order)
    {
        $user = $order->user;

        $order->products()->sync($this->cart->products($user)->forSyncing());
        //forSyncing is a costum colleciton method
        OrderPaid::dispatch($user, $this->gateway, $order);
    }

    protected function createOrder($request)
    {
        return $request->user()->orders()->create(
            array_merge(
                $request->only(['delivery_id', 'shipping_id', 'billing_id', 'pay_at_door']),
                [
                    'subtotal' => $this->cart->subtotal()->amount(),
                    'total' => $this->cart->withShipping($request)->withInstallment($request)->total()->amount()
                ]
            )
        );
    }
}

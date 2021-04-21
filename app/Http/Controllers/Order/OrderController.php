<?php

namespace App\Http\Controllers\Order;

use App\Cart\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Cart\Payments\Gateway;
use App\Events\Order\OrderPaid;
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
            $this->paymentResult = $this->initialThreedPaymentCharge($request, $order);
            $this->checkPayment($this->paymentResult, $order);
            return $this->paymentResult->getHtmlContent();
        }

        $this->paymentResult = $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->charge();

        $this->checkPayment($this->paymentResult, $order);

        $this->afterPayment($this->paymentResult, $order);

        return new OrderResource($order);
    }

    public function finishThreedPaymentCharge(Request $request)
    {
        $order = Order::find($request->conversationId);
        $this->checkSecurePaymentValidation($order, $request);
        $this->paymentResult = $this->gateway->withSecureOptions($request)->finishSecureCharge();
        $this->checkSecurePayment($this->paymentResult, $order);
        $this->afterPayment($this->paymentResult, $order);
        return redirect("http://localhost:3000/odeme-sonrasi/order/{$order->id}");
    }

    public function initialThreedPaymentCharge($request, $order)
    {
        return $this->gateway
            ->withOptions($request, $this->cart, $order)
            ->initializeSecureCharge();
    }


    protected function afterPayment($paymentResult, Order $order)
    {
        $user = $order->user;

        $order->products()->sync($this->cart->products($user)->forSyncing());
        //forSyncing is a costum colleciton method
        OrderPaid::dispatch($order, $user, $paymentResult);
    }


    protected function checkSecurePaymentValidation($order, $request)
    {
        if (!$request->status == 'failure') {

            $order->updateStatusPaymentFailed();

            return redirect('http://localhost:3000/odeme', [
                'status' => false,
                'message' => 'Banka 3d ödemesi sırasında hata oluştu.'
            ]);
        }
    }

    protected function checkSecurePayment($paymentResult, $order)
    {
        if ($paymentResult->getStatus() == 'failure') {

            $order->updateStatusPaymentFailed();

            return redirect('http://localhost:3000/odeme', [
                'status' => false,
                'message' => 'Banka 3d ödemesi sırasında hata oluştu.'
            ]);
        }
    }

    protected function checkPayment($paymentResult, $order)
    {
        if ($paymentResult->getStatus() == 'failure') {

            $order->updateStatusPaymentFailed();

            throw new PaymentFailedException($this->paymentResult->getErrorMessage());
        }
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

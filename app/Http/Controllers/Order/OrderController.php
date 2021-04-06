<?php

namespace App\Http\Controllers\Order;

use App\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;

class OrderController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }


    public function store(OrderStoreRequest $request)
    {
        $order = $this->createOrder($request);

        $order->products()->sync(
            $this->cart->products($request)->keyBy('id')->map(function ($product) {
                return ['quantity' => $product->pivot->quantity];
            })->toArray()
        );
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
}

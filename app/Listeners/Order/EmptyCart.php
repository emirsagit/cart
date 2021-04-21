<?php

namespace App\Listeners\Order;

use App\Cart\Cart;
use App\Events\Order\OrderPaid;


class EmptyCart
{
    protected $cart;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        $this->cart->empty($event->user);
    }
}

<?php

namespace App\Listeners\Order;

use App\Events\Order\OrderPaid;


class CreateTransaction
{
    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        $event->gateway->createTransactions();
    }
}

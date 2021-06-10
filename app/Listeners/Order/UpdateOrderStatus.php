<?php

namespace App\Listeners\Order;

use App\Events\Order\OrderPaid;


class UpdateOrderStatus
{
    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        $event->gateway->updateOrderStatus();
    }
}

<?php

namespace App\Events\Order;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPaid
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $gateway;
    public $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $gateway, $order)
    {
        $this->user = $user;
        $this->gateway = $gateway;
        $this->order = $order;
    }
}

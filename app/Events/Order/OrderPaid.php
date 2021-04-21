<?php

namespace App\Events\Order;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPaid
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;
    public $user;
    public $paymentResult;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order, $user, $paymentResult)
    {
        $this->order = $order;
        $this->user = $user;
        $this->paymentResult = $paymentResult;
    }
}

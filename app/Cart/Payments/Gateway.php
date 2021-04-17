<?php

namespace App\Cart\Payments;

use App\Cart\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

interface Gateway
{
    public function charge();
    public function initializeSecureCharge();
    public function finishSecureCharge();
    public function withOptions(Request $request, Cart $cart, Order $order);
    public function withSecureOptions(Request $request);
}

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
    public function withSecureOptions(Request $request, Order $order);
    public function getInstallmentOptions($binNumber, $price);
    public function checkPayment();
    public function checkSecurePaymentValidation(Request $request);
    public function get3dsHtmlContent();
    public function logPaymentFailed(Order $order, $request = null);
    public function createTransactions();
    public function updateOrderStatus();
}

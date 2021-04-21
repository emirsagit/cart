<?php

namespace App\Http\Controllers;

use App\Cart\Cart;
use App\Cart\Payments\Gateway;
use Illuminate\Http\Request;
use App\Http\Requests\InstallmentRequest;
use App\Http\Resources\InstallmentResorce;

class InstallmentController extends Controller
{
    protected $cart;
    protected $gateway;

    public function __construct(Cart $cart, Gateway $gateway)
    {
        $this->cart = $cart;
        $this->gateway = $gateway;
    }


    public function store(InstallmentRequest $request)
    {
        $user = $request->user();
        $user->installments()->delete();
        $total = $this->cart->withShipping($request)->total()->decimalFormatted();
        $result = $this->gateway
            ->getInstallmentOptions($request->card_number, $total);

        $this->createInstallments($result->getInstallmentDetails()[0], $user, $request);
        return InstallmentResorce::collection($user->installments);
        // dd($result->getInstallmentDetails()[0]->getForce3ds());
    }

    protected function createInstallments($installmentDetails, $user, $request)
    {
        foreach ($installmentDetails->getInstallmentPrices() as $installment) {
            $user->installments()->create([
                'bin_number' => $installmentDetails->getBinNumber(), 
                'price' => $installmentDetails->getPrice(),
                'force3ds' => $installmentDetails->getForce3ds(),
                'card_family' => $installmentDetails->getCardFamilyName(),
                'installment_price' => ceil($installment->getInstallmentPrice() * 100), 
                'total_price' => ceil($installment->getTotalPrice() * 100), 
                'installment_number' => $installment->getInstallmentNumber(), 
                'local_subtotal' => $this->cart->subtotal()->amount(),
                'local_total' => $this->cart->withShipping($request)->total()->amount()
            ]);
        }
    }
}

<?php

namespace App\Rules;

use App\Cart\Cart;
use App\Models\Installment;
use Exception;
use Illuminate\Contracts\Validation\Rule;

class isTotalPriceValid implements Rule
{
    protected $installment;
    protected $cart;
    protected $request;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($installment_id, $request)
    {
        $this->installment = Installment::find($installment_id);
        $this->cart = new Cart();
        $this->request = $request;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //compare the total and the installment total.
        //so be sure no one change installment or shipping options before checkout by fraud
        if (!$this->installment) {
            throw new Exception('Installment Bulunamadı', 422);
        }

        $cardTotal = $this->cart->withShipping($this->request)->withInstallment($this->request)->total();
        $installmentTotal = $this->installment->total_price;
        return $cardTotal->equals($installmentTotal);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hata oluştu. Installment tutarı gerçek tutarla eşleşmedi.';
    }
}

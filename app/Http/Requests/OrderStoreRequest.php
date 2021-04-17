<?php

namespace App\Http\Requests;

use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use App\Rules\PayAtDoorIsValid;
use Illuminate\Validation\Rule;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;
use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'delivery_id' => [
                'required',
                Rule::exists('addresses', 'id')->where(function ($query) {
                    return $query->where('user_id', $this->user()->id);
                }),
            ],
            'billing_id' => [
                'required',
                Rule::exists('addresses', 'id')->where(function ($query) {
                    return $query->where('user_id', $this->user()->id);
                }),
            ],
            'shipping_id' => [
                'required',
                'exists:shippings,id'
            ],
            'pay_at_door' => [
                new PayAtDoorIsValid($this->shipping_id),
            ],
            // 'card_number' => ['required', new CardNumber],
            // 'expiration_year' => ['required', new CardExpirationYear($this->get('expiration_month'))],
            // 'expiration_month' => ['required', new CardExpirationMonth($this->get('expiration_year'))],
            // 'cvc' => ['required', new CardCvc($this->get('card_number'))],
            // 'card_holder' => ['required', 'string'],
        ];
    }
}

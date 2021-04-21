<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstallmentRequest extends FormRequest
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
            'card_number' => 'required|numeric|digits:6',
            'shipping_id' => 'required|numeric|exists:shippings,id'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'card_number' => substr($this->card_number, 0, 6)
        ]);
    }
}

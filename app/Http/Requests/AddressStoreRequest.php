<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'district' => 'required|exists:districts,name',
            'neighborhood' => 'required',
            'postal_code' => 'required|numeric'
        ];
    }
}

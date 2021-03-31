<?php

namespace App\Http\Requests;

use App\Models\District;
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
            'district' => 'required',
            'neighborhood' => 'required',
            'postal_code' => 'required|numeric'
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->has('district_id'))
            $this->merge(['district' => (District::where('id', $this->district_id)->first())->name]);
    }
}
    
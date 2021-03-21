<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'city' => new CityResource($this->city),
            'district' => $this->district,
            'neighborhood' => $this->neighborhood,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'address' => $this->address,
            'is_default' => $this->is_default,
            'is_delivery' => $this->is_delivery,
            'is_billing' => $this->is_billing
        ];
    }
}

<?php

namespace App\Http\Resources;

use App\Http\Resources\AddressResource;
use App\Http\Resources\ShippingResource;
use App\Http\Resources\ProductVariantResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'created_at' => $this->created_at->diffForHumans(),
            'status' => $this->status,
            'subtotal' => $this->subtotal->formatted(),
            'total' => $this->total()->formatted(),
            'products' => ProductVariantResource::collection($this->whenLoaded('products')),
            'delivery_address' => new AddressResource($this->whenLoaded('deliveryAddress')),
            'billing_address' => new AddressResource($this->whenLoaded('billingAddress')),
            'shipping' => new ShippingResource($this->whenLoaded('shipping')),
        ];
    }
}

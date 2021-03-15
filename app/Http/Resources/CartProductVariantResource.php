<?php

namespace App\Http\Resources;

use App\Cart\Money;
use App\Http\Resources\ProductVariantResource;

class CartProductVariantResource extends ProductVariantResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $total = (new Money($this->price->amount() *  $this->pivot->quantity))->formatted();

        return array_merge(parent::toArray($request), [
            'product' => new ProductsIndexResource($this->product),
            'quantity' => $this->pivot->quantity,
            'total' => $total
        ]);
    }
}

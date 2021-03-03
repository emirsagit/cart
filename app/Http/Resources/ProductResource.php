<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductsIndexResource;
use App\Http\Resources\ProductVariationResource;
use App\Http\Resources\ProductVariationOptionsResource;


class ProductResource extends ProductsIndexResource 
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), [
            'variations' => ProductVariationOptionsResource::collection($this->variationOptions)
        ]) ;
    }
}

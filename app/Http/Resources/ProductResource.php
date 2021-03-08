<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductsIndexResource;
use App\Http\Resources\ProductVariantResource;


class ProductResource extends ProductsIndexResource
{
    public function toArray($request)
    {
        $variants = $this->variants;
        return array_merge(parent::toArray($request), [
            'attributes' => ProductVariantResource::collection(
                $variants->groupBy(['attribute.name', 'attributeValue.name'])
            ),
            'options' => ProductVariantResource::collection(
                $variants->groupBy(['option.name', 'optionValue.name'])
            ),
        ]);
    }
}

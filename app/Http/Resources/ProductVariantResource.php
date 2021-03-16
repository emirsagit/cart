<?php

namespace App\Http\Resources;

use Illuminate\Support\Collection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantResource extends JsonResource
{

    public function toArray($request)
    {
        if ($this->resource instanceof Collection) {
            return ProductVariantResource::collection($this->resource);
        }

        return [
            'id' => $this->id,
            'price' => $this->formattedPrice,
            'stock' => intval($this->stockCount()),
            'in_stock' => $this->inStock(),
            'code' => $this->code,
            'option' => $this->option->name,
            'option_value' => $this->optionValue->name,
            'attribute' => $this->attribute->name,
            'attribute_value' => $this->attributeValue->name,
            'price_varies' => $this->priceVaries()
        ];
    }
}

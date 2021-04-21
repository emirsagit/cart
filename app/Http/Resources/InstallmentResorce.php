<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstallmentResorce extends JsonResource
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
            'force3ds' => $this->force3ds,
            'card_family' => $this->card_family,
            'installment_price' => $this->installment_price->formatted(),
            'total_price' => $this->total_price->formatted(),
            'installment_difference' => $this->installment_difference->formatted(),
            'installment_number' => $this->installment_number,
        ];
    }
}

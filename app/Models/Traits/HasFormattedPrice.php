<?php

namespace App\Models\Traits;

use App\Cart\Money;

trait HasFormattedPrice
{
    public function getPriceAttribute($value)
    {
        return new Money($value); 
    } 

    public function getFormattedPriceAttribute()
    {
        return $this->price->formatted(); //this->price is a Cart/Money instance
    } 
}
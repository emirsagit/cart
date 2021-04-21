<?php

namespace App\Models;

use App\Cart\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Installment extends Model
{
    use HasFactory;

    protected $appends = ['installment_difference'];

    protected $fillable = [
        'bin_number', 'user_id', 'installment_price', 'total_price', 'installment_number', 'price', 'card_family', 'local_subtotal', 'local_total'
    ];

    public function getInstallmentPriceAttribute($value)
    {
        return new Money($value);
    }

    public function getTotalPriceAttribute($value)
    {
        return new Money($value);
    }

    public function getLocalSubtotalAttribute($value)
    {
        return new Money($value);
    }

    public function getLocalTotalAttribute($value)
    {
        return new Money($value);
    }

    public function getInstallmentDifferenceAttribute()
    {
        return $this->total_price->subtract($this->local_total);
    }
}

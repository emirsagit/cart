<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\OptionValue;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'code', 'option_id', 'option_value_id', 'attribute_id', 'attribute_value_id', 'price', 'stock'
    ];

    protected static function booted()
    {
        static::creating(function ($variant) {
            $variant->code = "p" . $variant->product_id . "-o" .  $variant->option_id . $variant->option_value_id . "-a" . $variant->attribute_id . $variant->attribute_value_id;
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function optionValue()
    {
        return $this->belongsTo(OptionValue::class, 'option_value_id');
    }

    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class, 'attribute_value_id');
    }
}

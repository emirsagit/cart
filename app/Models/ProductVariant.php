<?php

namespace App\Models;

use App\Cart\Money;
use App\Models\Stock;
use App\Models\Option;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\OptionValue;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasFormattedPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory, HasFormattedPrice;

    protected $fillable = [
        'product_id', 'code', 'option_id', 'option_value_id', 'attribute_id', 'attribute_value_id', 'price', 'stock'
    ];

    protected static function booted()
    {
        static::creating(function ($variant) {
            $variant->code = "p" . $variant->product_id . "-o" .  $variant->option_id . $variant->option_value_id . "-a" . $variant->attribute_id . $variant->attribute_value_id;
        });
    }

    public function getPriceAttribute($value)
    {
        if (!$value) {
            return $this->product->price;
        }

        return new Money($value);
    }

    public function priceVaries()
    {
        return $this->price->amount() !== $this->product->price->amount();
    }

    public function stockCount()
    {
        return $this->stock->first()->pivot['stock'];
    }

    public function inStock()
    {
        return $this->stockCount() > 0;
    }

    public function minStock($requestQuantity)
    {
        return min($requestQuantity, $this->stockCount());
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
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

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_variant_id');
    }

    public function stock()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_variant_stock_view')
            ->withPivot(['stock', 'in_stock']);
    }
}

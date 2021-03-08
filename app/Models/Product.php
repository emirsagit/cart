<?php

namespace App\Models;


use App\Models\Option;
use App\Scoping\Scoper;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\ProductVariant;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasFormattedPrice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, IsOrderable, HasFormattedPrice;

    protected $fillable = [
        'name', 'slug', 'price', 'description', 'show_on_slider', 'show_on_homepage', 'seo_title', 'seo_description', 'slider_order', 'homepage_order', 'image'
    ];

    protected $casts = [
        'show_on_slider' => 'boolean',
        'show_on_homepage' => 'boolean'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function ScopeWithScopes(Builder $builder, $scopes = [])
    {
        return (new Scoper(request()))->apply($builder, $scopes);
    }

    public function stockCount()
    {
        return $this->variants->sum(function ($variant) {
            return $variant->stockCount();
        });
    } 

    public function inStock()
    {
        return $this->stockCount() > 0;
    } 

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'option_product');
    } 

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_product');
    } 

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    } 
}

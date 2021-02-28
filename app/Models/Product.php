<?php

namespace App\Models;

use App\Scoping\Scoper;
use App\Models\Category;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, IsOrderable;

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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    } 

    public function ScopeWithScopes(Builder $builder, $scopes = [])
    {
        return (new Scoper(request()))->apply($builder, $scopes);
    } 
}

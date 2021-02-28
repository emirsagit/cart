<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Traits\HasChildren;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasChildren, IsOrderable;

    protected $fillable = [
        'name', 'slug', 'order', 
    ];

    public function children()
    {
        return $this->hasMany($this, 'parent_id', 'id');
    } 

    public function products()
    {
        return $this->belongsToMany(Product::class);
    } 
}

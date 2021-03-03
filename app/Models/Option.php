<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OptionValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'option_product');
    } 

    public function values()
    {
        return $this->hasMany(OptionValue::class);
    } 

}

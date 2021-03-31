<?php

namespace App\Models;

use App\Models\Traits\HasFormattedPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory, HasFormattedPrice;

    protected $fillable = [
        'name', 'price', 'is_active', 'at_the_door'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}

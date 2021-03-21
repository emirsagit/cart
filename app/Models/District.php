<?php

namespace App\Models;

use App\Models\Neighborhood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'city_id'
    ];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    } 
}

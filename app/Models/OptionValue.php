<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OptionValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function parent()
    {
        return $this->belongsTo(Option::class);
    } 
}

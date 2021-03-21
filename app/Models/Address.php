<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'user_id', 'phone', 'address', 'city_id', 'neighborhood', 'district', 'postal_code', 'is_delivery', 'is_billing', 'is_default'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($address){
            if($address->is_default) {
                $address->user->addresses()->update([
                    'is_default' => false
                ]);
            }
        });
    } 

    public function setIsDefaultAttribute($value)
    {
        $this->attributes['is_default'] = ($value === 'true' || $value ? true : false);
    } 

    public function setIsBillingAttribute($value)
    {
        $this->attributes['is_billing'] = ($value === 'true' || $value ? true : false);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function city()
    {
        return $this->belongsTo(City::class);
    } 
}

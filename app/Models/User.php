<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Address;
use App\Models\ProductVariant;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart()
    {
        return $this->belongsToMany(ProductVariant::class, 'cart_user')
                ->withPivot('quantity', 'created_at');
    } 

    public function addresses()
    {
        return $this->hasMany(Address::class, 'user_id', 'id');
    } 

    public function orders()
    {
        return $this->hasMany(Order::class);
    } 
}

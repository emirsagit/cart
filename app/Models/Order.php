<?php

namespace App\Models;

use App\Cart\Money;
use App\Models\User;
use App\Models\Address;
use App\Models\Shipping;
use App\Models\Transaction;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasFormattedPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    const PENDING = "pending";
    const PROCESSING = "processing";
    const PAYMENT_FAILED = "payment_failed";
    const COMPLETED = "completed";

    protected $fillable = [
        'status', 'subtotal', 'delivery_id', 'billing_id', 'user_id', 'shipping_id', 'pay_at_door', 'total'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            $order->status = self::PENDING;
        });
    }

    public function updateStatusPaymentFailed()
    {
        $this->status = self::PAYMENT_FAILED;
        $this->save();
    }

    public function getSubtotalAttribute($value)
    {
        return new Money($value);
    }

    public function getTotalAttribute($value)
    {
        return new Money($value);
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(Address::class, 'delivery_id');
    }

    public function billingAddress()
    {
        return $this->belongsTo(Address::class, 'billing_id');
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_variant_order', 'order_id', 'product_variant_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}

<?php

namespace App\Models;

use App\Models\TransactionItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'payment_id', 'fraud_status', 'price', 'paid_price', 'installment'
    ];

    public function items()
    {
        return $this->hasMany(TransactionItem::class);
    }
}

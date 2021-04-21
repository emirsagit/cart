<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id', 'payment_transaction_id', 'item_id', 'price', 'paid_price', 'converted_payout_paid_price'
    ];
}

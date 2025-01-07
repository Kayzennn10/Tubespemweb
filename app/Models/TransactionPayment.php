<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'payment_method_id',
        'payment_status',
        'paid_at',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
        'currency_id',
        'amount',
        'total_price',
        'status',
        'transaction_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function currency()
    {
        return $this->belongsTo(GameCurrency::class, 'currency_id');
    }

    public function payment()
    {
        return $this->hasOne(TransactionPayment::class);
    }
}
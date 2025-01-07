<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCurrency extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'currency_name',
        'price',
        'description',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
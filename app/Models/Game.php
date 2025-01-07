<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function currencies()
    {
        return $this->hasMany(GameCurrency::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
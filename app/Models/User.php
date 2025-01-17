<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Kembali ke pengaturan default (INT dengan auto-increment)
    protected $keyType = 'int';
    public $incrementing = true;

    // Define fillable attributes
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
    ];

    // Hidden attributes for serialization
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationship with transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
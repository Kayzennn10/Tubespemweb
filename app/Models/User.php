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
    // Set key type to UUID
    protected $keyType = 'string';

    // Set auto incrementing to false (karena UUID tidak auto increment)
    public $incrementing = false;

    // Automatically generate UUID on creating a new record
    protected static function booted()
    {
        static::creating(function ($user) {
            if (!$user->id) {
                $user->id = (string) Str::uuid(); // Generate UUID
            }
        });
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
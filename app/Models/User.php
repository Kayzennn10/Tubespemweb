<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
=======
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
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'google_id', // Tambahkan kolom google_id
        'role_id',   // Kolom untuk peran user (role)
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
=======
        'phone',
        'role',
    ];

    // Hidden attributes for serialization
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
    protected $hidden = [
        'password',
        'remember_token',
    ];

<<<<<<< HEAD
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
=======
    // Relationship with transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739

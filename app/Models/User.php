<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
=======
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
=======
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
<<<<<<< HEAD
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
=======
        'password' => 'hashed',
>>>>>>> 238e8ef7b6f7597915af1048a7528d60d08bdf5a
    ];
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get all of the recommends for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recommends()
    {
        return $this->hasMany(Recommend::class, 'user_id', 'id');
    }
    /**
     * determine current instance is of admin
     * 1 == admin
     * 2 == user
     */
    public function isAdmin()
    {
        $isAdmin = ( $this->role == 1 ) ? true : false ;
        return $isAdmin ;
    }
}

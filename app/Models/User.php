<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function payment_types(){
        return $this->belongsToMany(payment_type::class,'user_payment_types','usert_id','payment_type_id');
    }

    public function reviews(){
        return $this->hasMany(review::class,'user_id','id');
    }

    public function favorit_cart(){
        return $this->hasOne(favorit_cart::class,'user_id','id');
    }

    public function order_cart(){
        return $this->hasOne(order_cart::class,'user_id','id');
    }

    public function addresses(){
        return $this->belongsToMany(addresse::class,'user_addresses','user_id','address_id');
    }

    
}

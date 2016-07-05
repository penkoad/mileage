<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function publish(Bill $bill)
    {
        // This will automatically assign the user_id behind the scene
        return $this->bills()->save($bill);
    }
}

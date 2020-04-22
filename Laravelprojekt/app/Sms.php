<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sms extends Model
{
    protected $fillable = [
        'mobile','text',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

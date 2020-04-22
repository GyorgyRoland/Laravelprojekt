<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
	protected $fillable = [
        'name', 'email', 'message', 
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
    public function run() {
    	DB::table('emails')->insert([
        	'name'=>'',
        	'email'=>'',
        	'message'=>'',
        ]);
    }
}

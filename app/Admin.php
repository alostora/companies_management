<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

	use Notifiable;


    protected $table = 'admins';
    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'password',
    	'api_token',

    ];


    protected $hidden = ['remember_token','api_token','password'];
}

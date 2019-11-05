<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAdressInfo extends Model
{
    protected $table = "user_adress_infos";
    protected $fillable = [

    	'governoment',
        'city',
        'referenecePersoneName',
        'referenecePersoneMobile',
        'compeleteAdress',
        'adressStatus',
        'user_id',
    ];
}

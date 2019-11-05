<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEmergencyFriendsInfo extends Model
{
    protected $table = "user_emergency_friends_infos";
    protected $fillable = [

    	'friendName',
        'friendWork',
        'friendMobile',
        'friendAdress',
        'user_id',

    ];
}

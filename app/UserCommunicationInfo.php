<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCommunicationInfo extends Model
{
    protected $table = "user_communication_infos";
    protected $fillable = [

    	'firstMobile',
        'secondMobile',
        'landPhone',
        'user_id',

    ];
}

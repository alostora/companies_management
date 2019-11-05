<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $table = "user_languages";
    protected $fillable = [

    	'langName',
        'write',
        'read',
        'speak',
        'printSpeed',
        'understandingSpeed',
        'user_id',


    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    protected $table = "user_personal_infos";
    protected $fillable = [

    	"firstName",
    	"lastName",
    	"fatherName",
    	"grandFatherName",
    	"familyName",
    	"personalCardNumber",
    	"cardReleaseDate",
        "cardExpireDate",
    	"nationality",
    	"sex",
    	"birthDay",
    	"birthPlace",
    	"religion",
    	"socialStatus",
    	"armyStatus",
    	"armyDate",
        "currentJobCard",
        "user_id",

    ];
}

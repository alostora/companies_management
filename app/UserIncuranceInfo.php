<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIncuranceInfo extends Model
{
    protected $table = "user_incurance_infos";
    protected $fillable = [

    	"insuranceStatus",
    	"insuranceOffice",
    	"insuranceNumber",
    	"user_id",

    ];
}

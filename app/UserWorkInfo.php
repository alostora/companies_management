<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWorkInfo extends Model
{
    protected $table = "user_work_infos";
    protected $fillable = [

    	"companyName",
    	"managerName",
    	"startWork",
    	"endWork",
        "workDuration",
    	"salary",
    	"missions",
    	"position",
    	"managerPhone",
    	"reasonForLeaving",
		"user_id",

    ];
}

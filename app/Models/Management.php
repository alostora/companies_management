<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = "managements";
    protected $fillable = [
    	"managementName",
    	"managementCode",
    	"managementRule",
        "isCategory",
    	"mainManagement",
    ];


    public function jobInfo(){
    	return $this->hasMany('App\Models\Job','manage_id');
    }


    public function subManagement(){
         return $this->hasMany('App\Models\Management','mainManagement');
    }


}

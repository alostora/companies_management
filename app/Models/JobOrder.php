<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    protected $table = "job_orders";
    protected $fillable = [

    	"CV_Code",
    	"hrAction",
    	"refuseReason",
    	"user_id",
    	"job_id",
    	"job_suggest_id",

    ];



    /*public function jobOrderInfo(){
	    return $this->belongsTo(App\Models\Job::class);
	}*/


}

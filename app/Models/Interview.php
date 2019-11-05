<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = "interviews";
    protected $fillable = [

    	"interviewDate",
    	"interviewTime",
    	"hrAction",
    	"hr_employer",
    	"user_employer",
    	"interview_job",
        "refuseReason",

    ];



    public function delayedInterview(){
    	return $this->hasOne('\App\Models\DelayInterview','interview_id');
    }


    public function personalInterviewAnswer(){
        return $this->hasOne('\App\Models\PersonalInterviewAnswer','interview_id');
    }


   

    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $fillable = [
    	"jobName",
    	"code",
        "jobRequirement",
    	"manage_id",
    ];




	public function interviewJob(){
    	return $this->hasMany('App\Models\Interview','interview_job');
    }



    public function jobOrderInfo(){
    	return $this->hasMany('App\Models\JobOrder','job_id');
    }


    public function jobSuggestInfo(){
    	return $this->hasMany('App\Models\JobOrder','job_suggest_id');
    }


    public function questions(){
        return $this->hasMany('App\Models\Question','job_id');
    }



}
    

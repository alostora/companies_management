<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DelayInterview extends Model
{
    protected $table = "delay_interviews";
    protected $fillable = [
    	"interviewDate",
    	"interviewTime",
    	"hrAction",
    	"interview_id",
    ];
}



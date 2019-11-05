<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExamResult extends Model
{
	protected $table = "user_exam_results";
    protected $fillable = [

    	"countTrueAnswer",
    	"countwrongAnswer",
    	"hrAction",
    	"user_id",

    ];
    
}


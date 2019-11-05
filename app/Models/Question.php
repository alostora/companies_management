<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = [

	 	'question',
        "job_id",

    ];


    public function fackAnswers(){
    	return $this->hasMany('App\Models\QuestionFackAnswer','question_id');
    }



}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionFackAnswer extends Model
{
    protected $table = "question_fack_answers";
    protected $fillable = [

        'fackAnswer',
        'theTrueAnswer',
	 	'question_id',


    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswerSheet extends Model
{
    protected $table = "user_answer_sheets";
    protected $fillable = [

    	"user_id",
    	"question_id",
    	"answer_id",
    	"theTrueAnswer",

    ];
}

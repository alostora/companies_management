<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCoursesInfo extends Model
{
    protected $table = "user_courses_infos";
    protected $fillable = [

    	'courseName',
        'handGraduation',
        'joinDate',
        'endDate',
        'courseDuration',
        'courseGrading',
        'user_id',


    ];
}

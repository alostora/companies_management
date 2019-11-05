<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducationInfo extends Model
{
    protected $table = "user_education_infos";
    protected $fillable = [

    	'qualificationType',
        'specialization',
        'educationGrading',
        'handGraduation',
        'graduationDate',
        'user_id',

    ];
}

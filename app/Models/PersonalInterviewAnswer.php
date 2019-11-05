<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInterviewAnswer extends Model
{
    protected $table = 'personal_interviews';
    protected $fillable = [
    	'generalView',
    	'character',
    	'trust',
    	'english',
    	'understanding',
    	'qualificationWithJob',
    	'experienceWithJob',
    	'earnedExperienceWithJob',
    	'expectCompletWork',
    	'recommendForWorkHR',
    	'recommendForWorkGM',
    	'interview_id',
    	'user_id',
        'hr_id',
        'hr_notes',
        'hrSuperGm_id',

    ];
}



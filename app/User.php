<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'users';
        protected $fillable = [

            'name',
            'email',
            'password',
            'emailToken',
            'emailApprove',
            'confirmConditions',
            'infoCompleted',
            'isManager',
            'userImage',
            
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token','api_token','password',
    ];





    //user information
    public function userPersonalInfo(){
         return $this->hasOne('App\UserPersonalInfo','user_id');
    }


    public function userCommunicationInfo(){
         return $this->hasOne('App\UserCommunicationInfo','user_id');
    }


    public function userAdressInfo(){
         return $this->hasMany('App\UserAdressInfo','user_id');
    }


    public function userEducationInfo(){
         return $this->hasMany('App\UserEducationInfo','user_id');
    }


    public function userCoursesInfo(){
         return $this->hasMany('App\UserCoursesInfo','user_id');
    }


    public function userLanguage(){
         return $this->hasMany('App\UserLanguage','user_id');
    }


    public function userIncuranceInfo(){
         return $this->hasOne('App\UserIncuranceInfo','user_id');
    }


     public function userWorkInfo(){
         return $this->hasMany('App\UserWorkInfo','user_id');
    }


    public function userPartnerInfo(){
         return $this->hasMany('App\UserPartnerInfo','user_id');
    }


    public function userEmergencyFriendsInfo(){
         return $this->hasMany('App\UserEmergencyFriendsInfo','user_id');
    }


    public function userFamilyCompanyInfo(){
         return $this->hasMany('App\UserFamilyCompanyInfo','user_id');
    }






    //user actions [interview and job order]
    public function hrInterviewEmployer(){
        return $this->hasOne('App\Models\Interview','hr_employer');
    }


    public function userInterViewEmployer(){
        return $this->hasOne('App\Models\Interview','user_employer');
    }



    public function userJobOrderInfo(){
        return $this->hasOne('App\Models\JobOrder','user_id');
    }



    public function userAnswerSheet(){
        return $this->hasMany('App\Models\UserAnswerSheet','user_id');
    }



    public function userExamResult(){
        return $this->hasOne('App\Models\UserExamResult','user_id');
    }


    public function personalInterviewAnswer(){
        return $this->hasMany('App\Models\PersonalInterviewAnswer','user_id');
    }


    public function personalInterviewAnswerHr(){
        return $this->hasMany('App\Models\PersonalInterviewAnswer','hr_id');
    }





}

<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\User;
use Auth;

class HomePage extends Controller
{

    public function homePage(){
    	$data['user'] = User::where('id',Auth::id())
        ->with('userPersonalInfo')
        ->with('userCommunicationInfo')
        ->with('userAdressInfo')
        ->with('userEducationInfo')
        ->with('userCoursesInfo')
        ->with('userLanguage')
        ->with('userIncuranceInfo')
        ->with('userWorkInfo')
        ->with('userPartnerInfo')
        ->with('userEmergencyFriendsInfo')
        ->with('userFamilyCompanyInfo')
        ->with('userJobOrderInfo')
        ->first();


        //if($data['user']->infoCompleted == false){
            if($data['user']->userJobOrderInfo == null) {
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserConditionAndChooseJobe');
            }elseif($data['user']->userPersonalInfo == null) {
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserPersonal');
            }elseif($data['user']->userCommunicationInfo == null){
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserCommunication');
            }elseif(!count($data['user']->userEducationInfo)){
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserEducation');
            }elseif($data['user']->userIncuranceInfo == null){
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserIncurance');
            }elseif(!count($data['user']->userWorkInfo)){
                    return view('User/UserCreateInformations/UserCompleteInfo/completeUserWork');
            }elseif(!count($data['user']->userEmergencyFriendsInfo)){
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserEmergencyFriends');
            }elseif(!count($data['user']->userPartnerInfo)){
                if($data['user']->userPersonalInfo->socialStatus == "married"){
                    return view('User/UserCreateInformations/UserCompleteInfo/completeUserPartner');
                }
            }/*elseif(!count($data['user']->userFamilyCompanyInfo)){
                return view('User/UserCreateInformations/UserCompleteInfo/completeUserFamilyCompany');
            }*/
        //}




        return view('User/Profile/userProfile',$data);
    }










}

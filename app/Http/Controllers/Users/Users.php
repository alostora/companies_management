<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserssCreate;
use App\Http\Requests\Users\UserPersonal;
use App\Http\Requests\Users\UserCommunication;
use App\Http\Requests\Users\UserEducation;
use App\Http\Requests\Users\UserIncurance;
use App\Http\Requests\Users\UserWork;
use App\Http\Requests\Users\UserPartner;
use App\Http\Requests\Users\UserEmergencyFriends;

use App\Http\Requests\Jobs\JobsOrders;
use App\Http\Requests\Users\familyCompany;

use App\Models\JobOrder;
use App\Models\Job;

use App\User;
use App\UserPersonalInfo;
use App\UserCommunicationInfo;
use App\UserAdressInfo;
use App\UserEducationInfo;
use App\UserCoursesInfo;
use App\UserLanguage;
use App\UserIncuranceInfo;
use App\UserWorkInfo;
use App\UserPartnerInfo;
use App\UserEmergencyFriendsInfo;
use App\UserFamilyCompanyInfo;

use App\Mail\SendMail;
use Validator;
use Auth;
use Hash;
use File;
use Mail;
use Carbon\Carbon;



class Users extends Controller
{


    public function register(){
        if(!Auth::check()){
            return view('User/register');
        }
        return redirect('/');
    }







    public function doRegister(Request $request){
        
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:30',
            'email' => 'required|unique:users,email|max:40',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ]);


        if($validator->fails()){
            if($request->name == null){
               return redirect('register')->withErrors(['errors'=>'الاسم مطلوب']); 
            }elseif($request->email == null){
                return redirect('register')->withErrors(['errors'=>'البريد مطلوب ']);  
            }elseif(User::where('email',$request->email)->first() != null){
                return redirect('register')->withErrors(['errors'=>'البريد موجود مسبقا']); 
            }elseif($request->password != $request->confirmPassword){
                return redirect('register')->withErrors(['errors'=>'كلمة المرور ليست متطابقة']);
            }elseif($request->password == null){
                return redirect('register')->withErrors(['errors'=>'كلمة المرور مطلوبة']);
            }
            return redirect('register')->withErrors($validator)->withInput();
        }
       $emailToken = str_random(50);
       
       $user = User::Create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'emailToken' => $emailToken,
        ]);
        
        Mail::to($request->email)->send(new SendMail($emailToken));

        $request->session()->flash('success','تم التسجيل بنجاح .. وتم ارسال رسالة تفعيل على البريد الخاص بك');
        return redirect('login');
       
    }







    public function activeEmail(Request $request,$emailToken=null){
        $user = User::where('emailToken',$emailToken)->first();
        if(!empty($user)){
            $user->emailApprove = true;
            $user->save();
            $request->session()->flash('success','تم التسجيل بنجاح');
            return redirect('/');
        }
    }







    public function login(){

        if(!\Auth::check()){
            return view('User/login');
        }
        return redirect('/');
    }







    public function doLogin(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|max:40',
            'password' => 'required|max:255',
        ]);


        if($validator->fails()){
            
            if($request->email == null){
                return redirect('login')->withErrors(['errors'=>'البريد مطلوب ']);  
            }elseif($request->password == null){
                return redirect('login')->withErrors(['errors'=>'كلمة المرور مطلوبة']);
            }
            return redirect('login')->withErrors($validator)->withInput();
        }


        $rememberme = $request->remember?true:false;
        
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$rememberme)){
            
            return view('firstPage');
        }else{
            return redirect('login')->withErrors(['errors'=>"خطأ فى كلمة المرور او البريد"]);
        }

    }







    public function userProfile(){
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
        
        return view('User/Profile/userProfile',$data);
    }







    public function confirmConditionAndChooseJobe(JobsOrders $request){
        
        $jobCvInfo = JobOrder::orderBy('created_at','DESC')->first();
        if(!empty($jobCvInfo)){
            $CV_Code =  ($jobCvInfo->CV_Code + 1);
        }else{
            $CV_Code =  1;
        }

        User::where('id',Auth::id())->update(['confirmConditions'=>true]);
        JobOrder::Create([
            "user_id" => $request->user_id,
            "job_id" => $request->job_id,
            "CV_Code" => $CV_Code,
        ]);

        //$request->session()->flash('success','user personal info has been add');
        return redirect('/');
    }








    public function jobInfo(){
        
        if (!empty($_GET['id'])) {
            $data['job'] = Job::find($_GET['id']);
            return $data;
        }
    }







    public function completeUserPersonal(UserPersonal $request){
        $user = $request->except(['_token']);
        
        $validator = Validator::make($request->all(),[
            'userImage' => 'required|image',
        ]);


        if($validator->fails()){
               return redirect('/')->withErrors(['errors'=>'الملف المرفوع يجب ان يكون صورة']); 
        }
        
        $info = UserPersonalInfo::Create($user);

        if ($request->hasFile('userImage')) {
            $image = $request->file('userImage');
            $imageName = str_slug("userImage".Carbon::now()).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/users/'.$info->user_id.'/');
            $image->move($destinationPath, $imageName);  
        }
        
        User::where('id',$info->user_id)->update(['userImage'=>$imageName]);


        //$request->session()->flash('success','user personal info has been add');
        return back();
        
        
    }







    public function completeUserCommunication(UserCommunication $request){
        
        UserCommunicationInfo::Create([
            'firstMobile' => $request->firstMobile,
            'secondMobile' => $request->secondMobile,
            //'landPhone' => $request->landPhone,
            'user_id' => Auth::id(),
        ]);


        foreach ($request->governoment as $key => $value) {
            UserAdressInfo::Create([
                'governoment' => $request->governoment[$key],
                'city' => $request->city[$key],
                'referenecePersoneName' => $request->referenecePersoneName[$key],
                'referenecePersoneMobile' => $request->referenecePersoneMobile[$key],
                'compeleteAdress' => $request->compeleteAdress[$key],
                'adressStatus' => $request->adressStatus[$key],
                'user_id' => Auth::id(),
            ]);
        }
        


        //$request->session()->flash('success','user Communication info has been add');
        return back();
    }







    public function completeUserEducation(UserEducation $request){


        foreach ($request->qualificationType as $key => $value) {
            UserEducationInfo::Create([
                'qualificationType' => $request->qualificationType[$key],
                'specialization' => $request->specialization[$key],
                'educationGrading' => $request->educationGrading[$key],
                'handGraduation' => $request->handGraduation[$key],
                'graduationDate' => $request->graduationDate[$key],
                'user_id' => Auth::id(),
            ]);
        }


        if($request->courseName[0] != null){
            foreach ($request->courseName as $key => $value) {
                UserCoursesInfo::Create([
                    'courseName' => $request->courseName[$key],
                    'handGraduation' => $request->handGraduation1[$key],
                    'joinDate' => $request->joinDate[$key],
                    'endDate' => $request->endDate[$key],
                    'courseDuration' => $request->courseDuration[$key],
                    'courseGrading' => $request->courseGrading[$key],
                    'user_id' => Auth::id(),
                ]);
            }
        }    
        

        if($request->langName[0] != null){
            foreach ($request->langName as $key => $value) {
                UserLanguage::Create([
                    'langName' => $request->langName[$key],
                    'write' => $request->write[$key],
                    'read' => $request->read[$key],
                    'speak' => $request->speak[$key],
                    //'printSpeed' => $request->printSpeed[$key],
                    //'understandingSpeed' => $request->understandingSpeed[$key],
                    'user_id' => Auth::id(),
                ]);
            }
        }
        
        
        //$request->session()->flash('success','user education info has been add');
        return back();
    }







    public function completeUserIncurance(UserIncurance $request){
        $user = $request->except(['_token']);
        
        $info = UserIncuranceInfo::Create($user);
        //$request->session()->flash('success','user Incurance info has been add');
        return back();
    }







    public function completeUserWork(UserWork $request){
        
        //if($request->companyName[0] == null)
            foreach ($request->companyName as $key => $value) {
                UserWorkInfo::Create([
                    "companyName" => $request->companyName[$key],
                    "managerName" => $request->managerName[$key],
                    "startWork" => $request->startWork[$key],
                    "endWork" => $request->endWork[$key],
                    "workDuration" => $request->workDuration[$key],
                    "salary" => $request->salary[$key],
                    "missions" => $request->missions[$key],
                    "position" => $request->position[$key],
                    "managerPhone" => $request->managerPhone[$key],
                    "reasonForLeaving" => $request->reasonForLeaving[$key],
                    "user_id" => Auth::id(),
                ]);
            }
        //}
        


        //$request->session()->flash('success','user work info has been add');
        return back();
    }







    public function completeUserPartner(UserPartner $request){
        
        if($request->partnerName[0] != null){
            foreach ($request->partnerName as $key => $value) {
                UserPartnerInfo::Create([
                    "partnerName" => $request->partnerName[$key],
                    "personalCardNumber" => $request->personalCardNumber[$key],
                    "relativeRelation" => $request->relativeRelation[$key],
                    "birthDate" => $request->birthDate[$key],
                    "user_id" => Auth::id(),
                ]);
            }
            //$request->session()->flash('success','user Partner info has been add');
            return back();
        }


        //$request->session()->flash('success','user Partner info has been add');
        return back()->withErrors(['errors'=> 'اسم الزوج/الزوجة مطلوب']);

    }
    
    
    
    
    
    
    public function completeUserFamilyCompany(familyCompany $request){
        
        if($request->name[0] != null){
            foreach ($request->name as $key => $value) {
                UserFamilyCompanyInfo::Create([
                    "name" => $request->name[$key],
                    "relativeRelation" => $request->relativeRelation[$key],
                    "mobile" => $request->mobile[$key],
                    "user_id" => Auth::id(),
                ]);
            }
            //$request->session()->flash('success','user Partner info has been add');
            return back();
        }


        //$request->session()->flash('success','user Partner info has been add');
        return back()->withErrors(['errors'=> 'partnerName is required']);

    }







    public function completeUserEmergencyFriends(UserEmergencyFriends $request){
        
        foreach ($request->friendName as $key => $value) {
            UserEmergencyFriendsInfo::Create([
                "friendName" => $request->friendName[$key],
                "friendWork" => $request->friendWork[$key],
                "friendMobile" => $request->friendMobile[$key],
                "friendAdress" => $request->friendAdress[$key],
                "user_id" => Auth::id(),
            ]);
        }


        //User::where('id',Auth::id())->update(['infoCompleted'=>true]);

        //$request->session()->flash('success','user Emergency Friends info has been add');
        return back();
    }








    public function myEmployers(){
        return view('User/Employers/myEmployers');
    }



    public function vacationOrder(){
        return view('User/Vacations/vacationOrder');
    }










    public function logOut(){
        auth()->logout();
        return redirect('login')->withErrors(['errors'=> 'تم تسجيل الخروج بنجاح']);
    }





}






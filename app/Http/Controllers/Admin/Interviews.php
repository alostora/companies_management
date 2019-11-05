<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Http\Requests\Jobs\JobCreate;
use App\Http\Requests\Jobs\JobsOrders;
use App\Http\Requests\Jobs\CreateInterview;
use App\Http\Requests\Jobs\CreateQuestion;
use App\Http\Requests\Jobs\PersonalInterviewQuestions;

use App\Models\Job;
use App\Models\Management;
use App\Models\JobOrder;
use App\Models\Interview;
use App\Models\DelayInterview;
use App\Models\Question;
use App\Models\QuestionFackAnswer;
use App\Models\UserAnswerSheet;
use App\Models\PersonalInterviewAnswer;
use App\User;
use App\Mail\HrAcceptJob;
use Mail;
use Validator;





class Interviews extends Controller
{


    public function createInterview(CreateInterview $request){
        $interviewData = $request->except(['_token']);

        $timestamp = strtotime($request->interviewDate);
        $day = date('D', $timestamp);

        if ($day == "Fri" or $day == "Sat") {

            $request->session()->flash('delete','this day is a vacation');
            return back();
        }

        $useremployer = User::where('id',$request->user_employer)->with('userInterViewEmployer')->first();
        $hremployer = User::where('id',$request->hr_employer)->with('userInterViewEmployer')->first();

        //Mail::to($useremployer->email)->send(new HrAcceptJob($useremployer));
        //Mail::to($hremployer->email)->send(new HrAcceptJob($hremployer));

        Interview::create($interviewData);
        $request->session()->flash('success','interview has been created');
        return back();

    }









    public function interviewInfo($interviewStatus=false){
        if ($interviewStatus == false) {
            $data['interviews'] = Interview::with('personalInterviewAnswer')->paginate(15);
        }else{
            $data['interviews'] = Interview::where('hrAction',$interviewStatus)
            ->with('personalInterviewAnswer')->paginate(15);
        }

        return view('Admin/Job/interviewInfo',$data);
    }









    public function interviewInfoWithDate(Request $request){
        $validator = Validator::make($request->all(),[
            'interviewDate' => 'required|date',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $data['interviews'] = Interview::where('interviewDate',$request->interviewDate)->paginate(15);
        return view('Admin/Job/interviewInfo',$data);
    }









    public function interviewAction(Request $request,$hrAction=false,$interviewDate=false){
        //we should send mail here
        Interview::where('interviewDate',$interviewDate)
        ->update([
            'hrAction'=>$hrAction,
            'refuseReason'=>$request->refuseReason
        ]);
        
        if ($hrAction == "accepted") {
            $request->session()->flash('success',"interview has been confirmed");
            return back();
        }
            $request->session()->flash('delete',"interview has been refused");
            return back();
    }









    public function delayInterview(CreateInterview $request){
        //return $request->all();

        $timestamp = strtotime($request->interviewDate);
        $day = date('D', $timestamp);

        if ($day == "Fri" or $day == "Sat") {

            $request->session()->flash('delete','this day is a vacation');
            return back();
        }

        $interV = Interview::where('interviewDate',$request->interviewOldDate)->get();
        //return $interV;
        foreach ($interV as $key => $inter) {

             DelayInterview::create([
                "interviewDate" => $request->interviewDate,
                "interviewTime" => $request->interviewTime,
                "interview_id" => $inter->id,
                "hrAction" => null,
            ]);

        }
       
        //Mail::to($useremployer->email)->send(new HrAcceptJob($useremployer));
        Interview::where('interviewDate',$request->interviewOldDate)->update(['hrAction'=>$request->hrAction]);
        $request->session()->flash('success','interview has been delayed successfully');
        return back();
    }









    public function delayedInterViewActions($interviewDate=false){

        $data['delayedInterviews'] = Interview::where('interviewDate',$interviewDate)
        ->with('delayedInterview')->paginate(15);

        
        return view('Admin/Job/delayedInterview',$data);

    }









    public function delayedInterviewAccepted(Request $request,$interviewDate=false){
        //we should send e-mail here
        if ($interviewDate != false) {
            $delayedInterview = DelayInterview::where('interviewDate',$interviewDate)->get();

            foreach ($delayedInterview as $key => $delintrv) {
                Interview::where('id',$delintrv->interview_id)->update([
                    'hrAction'=>'accepted',
                    'interviewDate'=> $delintrv->interviewDate,
                    'interviewTime'=> $delintrv->interviewTime,
                ]);
            }

            DelayInterview::where('interviewDate',$interviewDate)->delete();

            $request->session()->flash('success','delayed interview date has been accepted and updated');
            return redirect('admin/interviewInfo');

        }

        $request->session()->flash('success','there is no interview');
        return back();

    }









    public function refuseDelayInterview(Request $request){
        
        $delayedInterview = DelayInterview::where('interviewDate',$request->interviewDelayedDate)->get();

        foreach ($delayedInterview as $key => $delintrv) {

                Interview::where('id',$delintrv->interview_id)->update([
                    'hrAction'=> null,
                    'interviewDate'=> $request->interviewDate,
                    'interviewTime'=> $request->interviewTime,
                    'hr_employer'=> $request->hr_employer,
                ]);

            }

        DelayInterview::where('interviewDate',$request->interviewDelayedDate)->delete();

            $request->session()->flash('success','hr employer has ben changed and wait for response');
            return redirect('admin/interviewInfo');

    }









    public function startTest($userId,$jobId){

        $data['userCvInfo'] = User::where('id',$userId)
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

        return view('Admin/Job/startTest',$data);
    }









    public function userInterviewAnswer(PersonalInterviewQuestions $request){
        $requests = $request->except('_token');
        $data['result'] = PersonalInterviewAnswer::create($requests);
        return view('Admin/Job/viewResult',$data);
    }









    public function viewResult($userId=false){
        $data['result'] = PersonalInterviewAnswer::where('user_id',$userId)->first();
        return view('Admin/Job/viewResult',$data);
    }










}

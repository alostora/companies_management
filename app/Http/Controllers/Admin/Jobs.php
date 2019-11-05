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

use Illuminate\Database\Eloquent\Builder;

class Jobs extends Controller
{
    public function jobInfo(){
        
        if (!empty($_GET['id'])) {
            $data['job'] = Job::find($_GET['id']);
            return $data;
        }

    	$data['managements'] = Management::with('jobInfo')->paginate(15);
        
    	return view('Admin/Job/jobInfo',$data);
    }









    public function viewCreateJob($jobId=false){
    	if ($jobId != false) {
    		$data['job'] = Job::where('id',$jobId)->first();
    		return view('Admin/Job/viewCreateJob',$data);
    	}else{
    		return view('Admin/Job/viewCreateJob');
    	}

    }









    public function createJob(JobCreate $request){

    	$jobNameCode = mb_substr($request->jobName, 0, 2, "UTF-8");
    	
    	if ($request->id != null) {
    		Job::where('id',$request->id)->update([
    			"jobName" => $request->jobName,
    			"code" => $jobNameCode,
                "jobRequirement" => $request->jobRequirement,
		    	"manage_id" =>$request->manage_id,
    		]);

    		$request->session()->flash('success','job has been updated');
    		return back();

    	}else{
    		Job::create([
    			"jobName" => $request->jobName,
    			"code" => $jobNameCode,
                "jobRequirement" => $request->jobRequirement,
		    	"manage_id" =>$request->manage_id,
    		]);

    		$request->session()->flash('success','job has been added');
    		return back();
    	}
    }









    public function deleteJob(Request $request,$jobId=false){
    	$job = Job::find($jobId);
    	if(!empty($job)){
    		Job::where('id',$jobId)->delete();
    	}

    	$request->session()->flash('delete','job has been deleted');
    		return back();
    }









    public function jobOrderInfo(Request $request){

        $data = [];

        foreach (JobOrder::where('hrAction',null)->get(['job_id']) as $key => $idd) {
            $id[$key] = $idd->job_id;
        }

        if (!empty($id)) {
            $data['jobOrderInfo'] = job::whereIn('id',$id)->paginate(15);
        }

        /******************************************************/
        foreach (JobOrder::whereIn('hrAction',['suggested','accepted','refused'])->get(['job_id']) as $key => $iddo) {
            $ido[$key] = $iddo->job_id;
        }

        if (!empty($ido)) {
            $data['oldJobOrderInfo'] = job::whereIn('id',$ido)->paginate(15);
        }
        
        /******************************************************/

        foreach (JobOrder::where('hrAction',"suggested")->get(['job_id']) as $key => $idds) {
            $ids[$key] = $idds->job_id;
        }

        if(!empty($ids)){
            $data['suggestJobOrderInfo'] = job::whereIn('id',$ids)->paginate(15);
        }

        /******************************************************/

        foreach (JobOrder::where('hrAction',"refused")->get(['job_id']) as $key => $iddr) {
            $idr[$key] = $iddr->job_id;
        }

        if(!empty($idr)){
            $data['refusedJobOrderInfo'] = job::whereIn('id',$idr)->paginate(15);
        }


    	return view('Admin/Job/jobOrderInfo',$data);

    }









    public function jobCvInfo(Request $request,$jobId,$hrAction=null){

        if ($hrAction=="new") {
            $data['jobCvInfo'] = JobOrder::where('job_id',$jobId)->where('hrAction',null)->paginate(15);
        }elseif($hrAction=="suggested"){
            $data['jobCvInfo'] = JobOrder::where('job_id',$jobId)->where('hrAction','suggested')->paginate(15);
        }elseif($hrAction=="refused"){
            $data['jobCvInfo'] = JobOrder::where('job_id',$jobId)->where('hrAction','refused')->paginate(15);
        }elseif($hrAction=="old"){
            $data['jobCvInfo'] = JobOrder::where('job_id',$jobId)
            ->whereIn('hrAction',['suggested','accepted','refused'])
            ->paginate(15);
        }
    	
    	return view('Admin/Job/jobCvInfo',$data);

    }









    public function userCvInfo(Request $request,$userId){
    	
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

    	//return $data;

    	return view('Admin/Job/userCvInfo',$data);

    }









    public function hrAcceptUserJob(Request $request,$userId=false){
        //we should send mail here
        $user = User::where('id',$userId)->with('userJobOrderInfo')->first();

        //Mail::to($user->email)->send(new HrAcceptJob($user));

        JobOrder::where('user_id',$userId)->update(["hrAction"=>"accepted"]);

        $request->session()->flash('success','job has been accepted successfully');
        return back();

    }









    public function hrSuggestJob(JobsOrders $request){
        $data = $request->except(['_token','status']);

        $user = User::where('id',$request->user_id)->with('userJobOrderInfo')->first();

        //Mail::to($user->email)->send(new HrAcceptJob($user));

        JobOrder::where('user_id',$request->user_id)->update($data);

        $request->session()->flash('success','job has been suggested successfully');
        return back();

    }









    public function hrRefuseJob(JobsOrders $request){
        $data = $request->except(['_token','status']);

        $user = User::where('id',$request->user_id)->with('userJobOrderInfo')->first();

        //Mail::to($user->email)->send(new HrAcceptJob($user));

        JobOrder::where('user_id',$request->user_id)->update($data);

        $request->session()->flash('success','job has been refused successfully');
        return back();

    }







    /*public function userAnswer(Request $request){
        $question_answer = $request->except(['_token','user_id']);

        foreach ($question_answer as $key => $answer) {
            $ans[$key] = $answer; 
        }

        $faAns = QuestionFackAnswer::whereIn('id',$ans)->get();

        foreach($faAns as $anss){
            UserAnswerSheet::create([

                'user_id'=>$request->user_id,
                'question_id' => $anss->question_id,
                'answer_id' => $anss->id,
                "theTrueAnswer" => $anss->theTrueAnswer,

            ]);
        }

        $request->session()->flash('success','exam has been finished successfully');
        return redirect('admin/myInterviewDay');
    }*/






}

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




class Questions extends Controller
{


    

    public function questionInfo(){
        $data['questions'] = Question::with('fackAnswers')->paginate(15);
        return view('Admin/Job/questionInfo',$data);
    }









    public function viewCreateQuestion($questionId = false){
        if ($questionId == false) {
            return view('Admin/Job/viewCreateQuestion');
        }

        $data['question'] = Question::find($questionId);
        return view('Admin/Job/viewCreateQuestion',$data);
    }









    public function createQuestion(CreateQuestion $request){
        
        if(!empty($request->id)){
            Question::where('id',$request->id)->update([
                "question" => $request->question,
                "job_id" => $request->job_id,
            ]);

            if(!empty($request->fackAnswer)){
                QuestionFackAnswer::where('question_id',$request->id)->delete();
                foreach ($request->fackAnswer as $key => $fack) {
                     QuestionFackAnswer::create([
                        "fackAnswer" => $fack,
                        'question_id' => $request->id
                    ]);
                }
            }

            $request->session()->flash("success","question has been edited successfully");
            return back();
        }

        $question = Question::create([
                "question" => $request->question,
                "job_id" => $request->job_id,
            ]);

        if(!empty($request->fackAnswer)){
            foreach ($request->fackAnswer as $key => $fack) {
                QuestionFackAnswer::create([
                    "fackAnswer" => $fack,
                    'question_id' => $question->id
                ]);
            }
        }

        $request->session()->flash("success","question has been edited successfully");
        return back();

    }









    public function fackAnswerInfo($questionId=false){

        if ($questionId == false) {
            $data['answers'] = QuestionFackAnswer::paginate(15);
            return view('Admin/job/fackAnswerInfo',$data);
        }

        $data['answers'] = QuestionFackAnswer::where('question_id',$questionId)->paginate(15);
        return view('Admin/job/fackAnswerInfo',$data);

    }









    public function changeAnswerStatus(Request $request,$answerId=false,$status=false){
        if($status == "true"){
             QuestionFackAnswer::where('id',$answerId)->update([
                "theTrueAnswer" => true,
            ]);
        }elseif($status == "false"){
           QuestionFackAnswer::where('id',$answerId)->update([
                "theTrueAnswer" => false,
            ]);
        }elseif($status == "delete"){
            QuestionFackAnswer::where('id',$answerId)->delete();
            $request->session()->flash('delete',"the answer has been deleted successfully");
            return back();
        }

        $request->session()->flash('success',"the answer status changed to ".$status."successfully");
        return back();
    }





}

<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInterviewQuestions extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'generalView' => 'required|in:Excellent,Good,Medium,Poor', 
           'character' => 'required|in:Excellent,Good,Medium,Poor', 
           'trust' => 'required|in:Excellent,Good,Medium,Poor', 
           'english' => 'required|in:Excellent,Good,Medium,Poor', 
           'understanding' => 'required|in:Excellent,Good,Medium,Poor', 
           'qualificationWithJob' => 'required|in:Excellent,Good,Medium,Poor', 
           'experienceWithJob' => 'required|in:Excellent,Good,Medium,Poor', 
           'earnedExperienceWithJob' => 'required|in:Excellent,Good,Medium,Poor', 
           'expectCompletWork' => 'required|in:Yes,No', 
           'recommendForWorkHR' => 'required|in:Yes,No', 
           'recommendForWorkGM' => 'required|in:Yes,No',
            
           /*'interview_id' => 'required|numeric', 
           'user_id' => 'required|numeric', 
           'hr_id' => 'required|numeric',*/ 
        ];
    }
}



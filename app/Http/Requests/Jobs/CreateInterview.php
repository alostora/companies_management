<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class CreateInterview extends FormRequest
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

        if (Request('hrAction') == 'delay') {

            return [

                "interviewDate" => "required|date",
                "interviewTime" => "required|date_format:H:i",
                "hrAction" => "required|in:delay",
                "interviewOldDate" => "required|date",

            ];

        }else{

            return [

                "interviewDate" => "required|date",
                "interviewTime" => "required|date_format:H:i",
                //"hrAction" => "required|in:accepted,refused,delay",
                "hr_employer" => "required|numeric",
                "user_employer" => "required|numeric|unique:interviews,user_employer",
                "interview_job" => "required|numeric",

            ];

        }    
        
    }
}

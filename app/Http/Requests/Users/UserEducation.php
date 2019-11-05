<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserEducation extends FormRequest
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

            //user education
            'qualificationType.*' => 'required|string',
            'specialization.*' => 'required|string',
            'educationGrading.*' => 'required|string',
            'handGraduation.*' => 'required|string',
            'graduationDate.*' => 'required|date',


            //user course
            /*'courseName.*' => 'required|string',
            'handGraduation.*' => 'required|string',
            'joinDate.*' => 'required|date',
            'endDate.*' => 'required|date',
            'courseGrading.*' => 'required|string',


            //user language
            'langName.*' => 'required|string',
            'write.*' => 'required|string',
            'read.*' => 'required|string',
            'speak.*' => 'required|string',*/
            //'printSpeed' => 'required|array',
            //'understandingSpeed' => 'required|array',



        ];
    }
}

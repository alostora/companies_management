<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestion extends FormRequest
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
            "question" => "required|max:150",
            "job_id" => "required|numeric",
            "fackAnswer" => "required|array",
            
        ];
    }
}

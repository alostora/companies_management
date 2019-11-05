<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserWork extends FormRequest
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
            
            /*'companyName' => 'required|array',
            'managerName' => 'required|array',
            'startWork' => 'required|array',
            'endWork' => 'required|array',
            'salary' => 'required|array',
            'missions' => 'required|array',
            'position' => 'required|array',
            'managerPhone' => 'required|array',
            'reasonForLeaving' => 'required|array',*/
        ];
    }
}
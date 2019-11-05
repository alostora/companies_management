<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserPersonal extends FormRequest
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
            
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:30',
            'fatherName' => 'required|max:30',
            'grandFatherName' => 'required|max:30',
            'familyName' => 'required|max:30',
            'personalCardNumber' => 'required|max:30',
            'cardReleaseDate' => 'required|date',
            'cardExpireDate' => 'required|date',
            'currentJobCard' => 'required|max:40',
            'nationality' => 'required|max:30',
            'sex' => 'required|max:30',
            'birthDay' => 'required|date',
            //'userImage' => 'required|image',
            //'birthPlace' => 'required|max:30',
            'religion' => 'required|max:30',
            'socialStatus' => 'required|in:married,widowed,single,divorced|max:30',
            //'armyStatus' => 'required|in:wanted,notWanted,delayed,done|max:30',
            //'armyDate' => 'required|date',
            'user_id' => 'required|unique:user_personal_infos,user_id|numeric',
            
        ];
    }
}
<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserssEdits extends FormRequest
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
        $users  = \App\User::find(\Request('id'));

        return [
            
            'id' => 'required',
            'name' => [
                'required','max:30',
                Rule::unique('users')->ignore($users->name,'name'),
            ],

            'email' => [
                'required',
                Rule::unique('users')->ignore($users->email,'email'),
            ],
            'password' => 'required',
            'confirmPassword' => 'required|same:password',

        ];
    }
}

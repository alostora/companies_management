<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserEmergencyFriends extends FormRequest
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
            'friendName.*' => 'required|string',
            'friendWork.*' => 'required|string',
            'friendMobile.*' => 'required|string',
            'friendAdress.*' => 'required|string',
        ];
    }
}

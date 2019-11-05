<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserCommunication extends FormRequest
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

            //user communication
            'firstMobile' => 'required|string',
            'secondMobile' => 'required|string',
            //'landPhone' => 'required',

            //user adress
            'governoment.*' => 'required|string',
            'city.*' => 'required|string',
            'referenecePersoneName.*' => 'required|string',
            'referenecePersoneMobile.*' => 'required|string',
            'compeleteAdress.*' => 'required|string',
            'adressStatus.*' => 'required|string',

        ];
    }
}

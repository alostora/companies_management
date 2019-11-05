<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserIncurance extends FormRequest
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

            'insuranceStatus' => 'required|in:havent,haveAndWork,haveAndNotWork|max:30',
            /*'insuranceOffice' => 'required|max:30',
            'insuranceNumber' => 'required|max:30',*/
            'user_id' => 'required|unique:user_incurance_infos,user_id|numeric',
            
        ];
    }
}

<?php

namespace App\Http\Requests\Managements;

use Illuminate\Foundation\Http\FormRequest;

class ManagementCreate extends FormRequest
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
            "managementName" => "required|max:30",
            "managementRule" => "required|integer",
            /*"mainManagement" => "required|integer",*/
        ];
    }
}

<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class JobsOrders extends FormRequest
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

        if (Request('hrAction') === "suggested") {
            return [
                "job_suggest_id" => "required|numeric",
                "user_id" => "required|numeric",
                "hrAction" => "required|in:suggested",
            ];               
        }elseif (Request('hrAction') === "refused") {
            return [
                "user_id" => "required|numeric",
                "hrAction" => "required|in:refused",
                "refuseReason" => "required|max:50",
            ]; 
        }else{
            return [
                "job_id" => "required|numeric",
                "user_id" => "required|numeric|unique:job_orders,user_id",
            ];  
        }

        
    }
}


/*
    unique:job_orders,user_id
*/
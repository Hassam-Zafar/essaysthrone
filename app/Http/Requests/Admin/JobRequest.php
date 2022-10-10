<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_id'=>'required',
            'title'=>'required',
            'start_salary'=>'required|numeric',
            'end_salary'=>'required|numeric',
            'status'=>'required',
            'career_level'=>'required',
            'no_of_position'=>'required|numeric',
            'location'=>'required',
            'gender'=>'required',
            'description'=>'required'
        ];
    }
}

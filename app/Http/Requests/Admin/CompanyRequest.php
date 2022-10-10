<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        $rules =  [
            'name'=>'required',
            'slug'=>'required|unique:companies,slug,'.$this->id.',id,deleted_at,NULL',
            'status'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|unique:users,email,'.$this->id.',id',
            // 'phone'=>'required',
        ];

        if($this->id){
            if($this->has('password') && !$this->password){
                unset($rules['password']);
                unset($this->password);
            }
        }

        return $rules;
    }
}

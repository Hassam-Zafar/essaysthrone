<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {   
        $rules =  [
            'first_name'=>'required',
            'last_name'=>'required',
            'slug'  => 'required|alpha_dash|unique:users,slug,'.$this->user,
            'status'=>'required',
            'is_verified'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|unique:users,email,'.$this->user.',id',
            'phone'=>'required',
        ];

        if($this->user){
            if($this->has('password') && !$this->password){
                unset($rules['password']);
                unset($this->password);
            }
        }

        return $rules;
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required',
            'slug'=>'required|unique:posts,slug,'.$this->id.',id,deleted_at,NULL',
            'pseudonym_id'=>'required',
            'is_published'=>'required',
            // 'media'=>'required',
            // 'created_date_time'=>'required',
            'content'=>'required',
            'categories'=>'required',
        ];
    }
}

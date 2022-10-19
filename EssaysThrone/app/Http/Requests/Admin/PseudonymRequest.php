<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PseudonymRequest extends FormRequest
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
            'slug'=>'required|unique:pseudonyms,slug,'.$this->id.',id,deleted_at,NULL',
            // 'media'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
        ];
    }
}

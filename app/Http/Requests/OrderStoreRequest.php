<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class OrderStoreRequest extends FormRequest
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

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json($validator->errors(), 422));
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'lead_id' => 'required',
            // 'instructions' => 'required',
            // 'topic' => 'required',
            'price_plan_type_of_work_id' => 'required',
            'price_plan_level_id' => 'required',
            'price_plan_urgency_id' => 'required',
            'price_plan_no_of_page_id' => 'required',
            // 'price_plan_indentation_id' => 'required,
            // 'price_plan_subject_id' => 'required,
            // 'price_plan_style_id' => 'required,
            // 'price_plan_language_id' => 'required,
            'total_amount' => 'required',
            // 'manual_discount_amount' => 'required',
            // 'discount_amount' => 'required',
            'grand_total_amount' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        if ($this->method() == "POST") {
            return [
                'company_id' => 'required',
                'tel' => 'numeric',
                'review_content' => 'max:1000'
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'company_id.required' => "事務所名を入力してください",
            'tel.regex' => "電話番号の形式が正しくありません",
        ];
    }
}

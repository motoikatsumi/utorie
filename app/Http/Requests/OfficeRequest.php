<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeRequest extends FormRequest
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
                'name' => 'required',
                'pref_id' => 'required',
                'company_id' => 'required'
                // 'tel' => 'numeric',
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'name.required' => "事務所名を入力してください",
            'pref_id.required' => '都道府県を選択してください',
            'tel.numeric' => '電話番号の形式が正しくありません',
            'company_id.required' => '会社のフィールドが必要です',
            // 'tel.regex' => "電話番号の形式が正しくありません",
            
        ];
    }
}

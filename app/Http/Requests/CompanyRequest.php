<?php

namespace App\Http\Requests;

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
            'company_name' => 'required',
            'index' => 'required',
            'sticking_point' => 'numeric',

        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => "カンパニー名を⼊⼒してください",
            'display_flg.required' => "検索表示フラグを⼊⼒してください",
            'index.required' => "indexを⼊⼒してください",
            'sticking_point.numeric' => "スティッキングポイントフィールドは数値です",
        ];
    }
}

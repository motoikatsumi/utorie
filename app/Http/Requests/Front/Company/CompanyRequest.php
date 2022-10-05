<?php

namespace App\Http\Requests\Front\Company;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == "POST") {
            return [
                'nickname' =>'required|max:30',
                'satisfaction' => 'required|numeric',                
            ];
        }
        return [
            //
        ];
    }

    public function attributes() {
        return [
            'nickname' =>'お名前・ニックネーム',
            'satisfaction' => '総合満足度',           
        ];
    }

    public function messages() {
        return [
            'nickname.required' => ':attribute - 入力フィールドは必須です',
            "nickname.max" => ':attribute - Max: 30',
            "satisfaction.required" => ':attribute - 入力フィールドは必須です',
            "satisfaction.numeric" => ':attribute - Must be numeric',
        ];
    }
}
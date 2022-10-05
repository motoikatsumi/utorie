<?php

namespace App\Http\Requests\Front\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'issue' =>'required',
                'building_area2' => 'required|max:150',
                'name' => 'required|max:30',
                'email' => 'required|email|max:30',
                'message' => 'required'
            ];
        }
        return [
            //
        ];
    }

    public function attributes() {
        return [
            'issue' =>'お問い合わせ種別',
            'building_area2' => '会社名',
            'name' => '氏名',
            'email' => 'メールアドレス',
            'message' => 'お問い合わせ内容'
        ];
    }

    public function messages() {
        return [
            'issue.required' => ':attribute - 入力フィールドは必須です',
            "building_area2.required" => ':attribute - 入力フィールドは必須です',
            "name.required" => ':attribute - 入力フィールドは必須です',
            "email.required" => ':attribute - 入力フィールドは必須です',            
            "email.max" => '電子メールの形式が正しくありません (最大30文字)',
            "message.required" => ':attribute 入力フィールドは必須です',                        
        ];
    }
}
<?php

namespace App\Http\Requests\Front\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
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
                'housetype' =>'required|max:30',
                'building_area' => 'required|max:150',
                'isthereland' => 'required|max:300',
                'name' => 'required|max:30',
                'budget' => 'required|max:50',
                'age' => 'required|max:30',
                'email' => 'required|email|max:50|min:10',
                'tel' => 'required|max:11'
            ];
        }
        return [
            //
        ];
    }

    public function attributes() {
        return [
            'housetype' =>'ご希望の住宅タイプは',
            'building_area' => 'ご希望のエリアは',
            'isthereland' => '土地の有無は',
            'name' => '土地の有無は',
            'budget' => 'ご希望の建築予算は',
            'age' => 'ご年齢は',
            'email' => 'お名前は',
            'tel' => '電話番号は'
        ];
    }

    public function messages() {
        return [
            'housetype.required' => ':attribute - 入力フィールドは必須です',
            "building_area.required" => ':attribute - 入力フィールドは必須です',
            "isthereland.required" => ':attribute - 入力フィールドは必須です',
            "name.required" => ':attribute - 入力フィールドは必須です',
            "budget.required" => ':attribute - 入力フィールドは必須です',
            "age.required" => ':attribute - 入力フィールドは必須です',
            "tel.required" => ':attribute - 入力フィールドは必須です',
            "email.email" => '電子メールの形式が正しくありません',
            "email.min" => '電子メールの形式が正しくありません (最小10文字)',
            "email.max" => '電子メールの形式が正しくありません (最大30文字)',            
        ];
    }
}
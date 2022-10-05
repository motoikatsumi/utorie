<?php

namespace App\Http\Requests\Admin\Seo;

use Illuminate\Foundation\Http\FormRequest;

class SeoRequest extends FormRequest
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
                'page_name' =>'required|max:100',
                'route' => "required|max:200|unique:seos,route,{$this->id}",
                'title' => 'required|max:70',
            ];
        }
        return [
            //
        ];
    }

    public function attributes() {
        return [
            'page_name' => 'Page Name',
            'route' => 'Route Name',
            'title' => 'Page Seo Title',
        ];
    }

    public function messages() {
        return [
            'page_name.required' => ':attribute is required',
            "route.required" => ':attribute is required',
            'route.unique' => ':attribute is unique',
            'title.required' => ':attribute is required',
            'title.max' => ':attribute should have maxlength of 70',
        ];
    }
}
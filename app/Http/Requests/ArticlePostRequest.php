<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlePostRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'details'=> 'required|min:10',
            'slug'=>'required|unique:articles',
            'category_id'=>'required'
            
        ];
    }

    public function messages(){
        return [
            'name.required' => 'this field is required',
            'name.min' => 'name too short',
            'details.required' => 'this field is required',
            'details.min'=>'too short',
            'slug.required'=>' field required',
            'slug.unique'=>'slug must be unique',
            'category_id'=>'this field is required',
           
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryPostRequest extends FormRequest
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
            'description'=> 'required|min:10',
            
        ];
    }

    public function messages(){
        return [
            'name.required' => 'this field is required',
            'name.min' => 'name too short',
            'description.required' => 'this field is required',
            'description.min'=>'this description is too short',
           
        ];
    }
}

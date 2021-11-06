<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'title' => 'required|between:3,128',
            'text' => 'between:3,255',
            'slug' => 'required|between:3,255',
        ];

        if($this->isMethod('post')) {
            $rules['slug'] .= '|unique:App\Models\Post';
            $rules['title'] .= '|unique:App\Models\Post';
        };
        
        return $rules;
    }
}

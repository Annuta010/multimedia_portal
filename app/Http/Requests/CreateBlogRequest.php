<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use App\Services\SlugFormatter;

class CreateBlogRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => SlugFormatter::concatWithUserId(Str::slug($this->title), $this->user_id),
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'title' => 'required|between:3,255',
            'description' => 'between:3,255',
            'slug' => 'required|between:3,255',
            'user_id' => 'required',
        ];

        if($this->isMethod('post')) {
            $rules['slug'] .= '|unique:App\Models\Blog';
        };
        
        return $rules;
    }
}

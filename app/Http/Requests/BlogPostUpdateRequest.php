<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * @property mixed image
 */
class BlogPostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'title'         => 'required|min:5|max:150',
//            'excerpt'       => 'required|min:5|max:200',
//            'content'       => 'required|min:5|max:5000',
//            'is_published'  => 'boolean'

        ];
    }
}

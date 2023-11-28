<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:90',
            'author' => 'required|min:5|max:90',
            'ebook' => 'mimes:mp4,mov,ogg,qt|max:20000',
            'description' => 'required',  
            'category_id' => 'required|min:1|max:90',
            'author_id' => 'required|min:1|max:90',
        ];
    }
}

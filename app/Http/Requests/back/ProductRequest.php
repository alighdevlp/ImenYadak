<?php

namespace App\Http\Requests\back;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'price' => 'required',
            'count' => 'required',
            'description' => 'required'
        ];
    }
}

<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'required',
            'family' => 'required',
            'phone' => 'required|max:11|min:11',
            'address' => 'required',
            'email' => 'required|email'
        ];
    }
}

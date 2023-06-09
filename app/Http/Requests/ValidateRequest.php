<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'en_name' => 'required',
            'en_description' => 'required',
            'am_name' => 'required',
            'am_description' => 'required',
            'ru_name' => 'required',
            'ru_description' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'name' => ['required', 'max:100', 'string'],
            'year' => ['nullable', 'integer'],
            'pages' => ['nullable', 'integer'],
            'cover' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il Titolo del libro é obbligatorio',
            'name.max' => 'Hai inserito troppi caratteri',
            'pages.integer' => 'Devi inserire un numero intero',
        ];
    }
}

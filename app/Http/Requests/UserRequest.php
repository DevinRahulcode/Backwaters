<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:100', // Changed max to 100 characters
            'email' => [
                'required',
                'email',
                Rule::unique('users')
                    ->ignore($this->route('id')),
            ],
            'password' => 'nullable|string|min:8|same:confirm_password', // Added min:8 and string type
        ];
    }
}

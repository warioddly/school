<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => ['required'],
        ];
    }


    public function messages(): array
    {
        return [
            'surname.required' => 'Please enter a surname.',
            'name.required' => 'Please enter a name.',
            'phone.required' => 'Please enter a phone number.',
            'email.required' => 'Please enter an email address.',
            'email.unique' => 'That email address is already in use.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Your password must be at least :min characters long.',
            'password.confirmed' => 'Please confirm your password.',
            'roles.required' => 'Please select a role',
        ];
    }
}

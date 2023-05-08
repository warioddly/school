<?php

namespace App\Http\Requests\Applications;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'surname' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'nullable|string',
        ];
    }
    
    public function messages(): array
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field must be a valid email address.',
            'phone.required' => 'The phone field is required.',
            'surname.required' => 'The surname field is required.',
            'name.required' => 'The name field is required.',
        ];
    }
    
}

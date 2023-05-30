<?php

namespace App\Http\Requests\Subjects;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class SubjectRequest extends FormRequest
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
     * @return array
     */
    #[ArrayShape(['name' => "string[]", 'teacher_id' => "string[]", 'description' => "string[]"])] public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'teacher_id' => ['required', 'integer', 'exists:users,id'],
            'description' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    #[ArrayShape(['name.required' => "string", 'teacher_id.required' => "string", 'description.required' => "string"])] public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'teacher_id.required' => 'Teacher is required',
            'description.required' => 'Description is required',
        ];
    }
}

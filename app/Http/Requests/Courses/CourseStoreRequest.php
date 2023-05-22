<?php

namespace App\Http\Requests\Courses;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'files.*' => ['nullable'],
            'tag_id' => ['nullable', 'exists:tags,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => __('The title is required.'),
            'description.string' => __('The description must be a string.'),
            'description.max' => __('The description may not be greater than :max characters.', ['max' => 1000]),
            'files.*.required' => __('The file is required.'),
            'tag_id.exists' => __('The selected tag is invalid.'),
        ];
    }

}

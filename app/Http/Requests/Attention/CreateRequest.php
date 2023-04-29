<?php

namespace App\Http\Requests\Attention;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
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
            'badge' => ['nullable', 'max:255'],
            'color' => ['nullable', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => __('The title is required.'),
            'description.string' => __('The description must be a string.'),
            'description.max' => __('The description may not be greater than :max characters.', ['max' => 1000]),
            'badge.max' => __('The badge may not be greater than :max characters.', ['max' => 255]),
            'color.max' => __('The color may not be greater than :max characters.', ['max' => 255]),
        ];
    }
}

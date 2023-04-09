<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleUpdateRequest extends FormRequest
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
            'name' => ['required', 'max:255', Rule::unique('roles', 'name')->ignore($this->id)],
            'permissions' => ['required', 'array', Rule::exists('permissions', 'id')]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('The role name is required.'),
            'name.string' => __('The role name must be a string.'),
            'name.max' => __('The role name may not be greater than :max characters.', ['max' => 255]),
            'name.unique' => __('The role name has already been taken.'),
            'permissions.required' => __('At least one permission is required.'),
            'permissions.exists' => __('One or more selected permissions do not exist.'),
        ];
    }
}

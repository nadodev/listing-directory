<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePasswordUpdateRequest extends FormRequest
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
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:5', 'confirmed'],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be at least 5 characters',
            'password.confirmed' => 'Password confirmation does not match',
            'password.current_password' => 'Current password is incorrect',
            'current_password.required' => 'Please enter your current password',
            'current_password.current_password' => 'Current password is incorrect',
        ];
    }
}

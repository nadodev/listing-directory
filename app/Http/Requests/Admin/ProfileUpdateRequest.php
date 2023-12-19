<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email'=> ['required','email',' unique:users,email,'.auth()->user()->id],
            'password' => ['nullable', 'string', 'min:8'],
            'phone' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string'],
            'website' => ['nullable', 'string'],
            'avatar' => ['nullable', 'max:3024'],
            'banner' => ['nullable','max:3024'],
            'about' => ['nullable', 'string'],
            'fb_link' => ['nullable', 'string'],
            'x' => ['nullable', 'string'],
            'in_link' => ['nullable', 'string'],
            'intra_link' => ['nullable', 'string'],

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is already taken',
            'email.email' => 'Email is invalid',
            'password.min' => 'Password must be at least 8 characters',
            'fb_link.required' => 'Facebook link is required',
            'x.required' => 'Xing link is required',
            'in_link.required' => 'Linkedin link is required',
            'intra_link.required' => 'Intra link is required',
        ];
    }
}

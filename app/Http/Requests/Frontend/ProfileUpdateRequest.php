<?php

namespace App\Http\Requests\Frontend;

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
            'conf_password' => ['nullable', 'string', 'min:8', 'same:password'],
            'phone' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string'],
            'website' => ['nullable', 'string'],
            'avatar' => ['nullable', 'max:3024', 'mimes:jpeg,jpg,png,gif', 'image'],
            'banner' => ['nullable','max:3024', 'mimes:jpeg,jpg,png,gif', 'image'],
            'about' => ['nullable', 'string'],
            'fb_link' => ['nullable', 'string'],
            'x' => ['nullable', 'string'],
            'in_link' => ['nullable', 'string'],
            'intra_link' => ['nullable', 'string'],

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'avatar.max' => 'Avatar size must be less than 3MB',
            'avatar.mimes' => 'Avatar must be jpeg,jpg,png,gif',
            'banner.max' => 'Banner size must be less than 3MB',
            'banner.mimes' => 'Banner must be jpeg,jpg,png,gif',
            'banner.image' => 'Banner must be jpeg,jpg,png,gif',
            'avatar.image' => 'Avatar must be jpeg,jpg,png,gif',
            'email.unique' => 'Email is already taken',
            'email.email' => 'Email is invalid',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',
            'fb_link.required' => 'Facebook link is required',
            'x.required' => 'Xing link is required',
            'in_link.required' => 'Linkedin link is required',
            'intra_link.required' => 'Intra link is required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'header_image' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/svg+xml,image/webp'],
            'primary_media' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/svg+xml,image/webp'],
            'created_by' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'isVisible' => ['nullable', 'string', Rule::in(['on', 'off'])],
        ];
    }
}
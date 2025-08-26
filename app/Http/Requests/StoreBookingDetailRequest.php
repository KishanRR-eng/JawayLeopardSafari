<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookingDetailRequest extends FormRequest
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
            'adult_first_name' => ['required', 'array'],
            'adult_first_name.*' => ['required', 'string', 'max:255'],
            'adult_last_name' => ['required', 'array'],
            'adult_last_name.*' => ['required', 'string', 'max:255'],
            'adult_age' => ['required', 'array'],
            'adult_age.*' => ['required', 'numeric', 'min:0'],
            'adult_identity_proof_type' => ['nullable', 'array'],
            'adult_identity_proof_type.*' => ['nullable', 'string', Rule::In([0, 1, 2, 3, 4])],
            'adult_identity_proof_id' => ['nullable', 'array'],
            'adult_identity_proof_id.*' => ['nullable', 'string'],
            // 'adult_identity' => ['nullable', 'array'],
            // 'adult_identity.*' => ['nullable', 'file', 'mimetypes:image/jpeg,image/png,image/jpg,application/pdf'],

            'child_first_name' => ['nullable', 'array'],
            'child_first_name.*' => ['nullable', 'string', 'max:255'],
            'child_last_name' => ['nullable', 'array'],
            'child_last_name.*' => ['nullable', 'string', 'max:255'],
            'child_age' => ['nullable', 'array'],
            'child_age.*' => ['nullable', 'numeric', 'min:0'],
            'child_identity_proof_type' => ['nullable', 'array'],
            'child_identity_proof_type.*' => ['nullable', 'string', Rule::In([0, 1, 2, 3, 4])],
            'child_identity_proof_id' => ['nullable', 'array'],
            'child_identity_proof_id.*' => ['nullable', 'string'],
            // 'child_identity' => ['nullable', 'array'],
            // 'child_identity.*' => ['nullable', 'file', 'mimetypes:image/jpeg,image/png,image/jpg,application/pdf'],
        ];
    }
}

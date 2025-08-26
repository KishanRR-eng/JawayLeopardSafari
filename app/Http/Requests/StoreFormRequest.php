<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFormRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_code' => ['required', 'numeric'],
            'mobile_no' => ['required', 'string'],
            'adults' => ['required', 'numeric', 'min:1'],
            'children' => ['required', 'numeric', 'min:0'],
            'email' => ['nullable', 'email:rfc,spoof,strict', 'max:255'],
            'date' => ['required', Rule::date()->format('Y-m-d')],
            'timing' => ['required', 'string', 'exists:time_slots,id'],
            'vehicle' => ['required', 'string', Rule::notIn(['0'])],
        ];
    }
}

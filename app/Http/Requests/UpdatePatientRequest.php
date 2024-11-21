<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'dni' => 'required', // DNI should be unique and within a certain range of digits
            'sex' => 'required|in:Masculino,Femenino', // Must be one of the predefined values
            'email' => 'required|email', // Email must be valid and unique
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20', // Adjust the length based on your requirements
            'emergency_phone_number' => 'required|string|max:20', // Same as phone_number
            'age' => 'required|integer|min:0|max:130', // Age must be a valid integer within a reasonable range
            'birthday' => 'required|date|before:today', // Birthday must be a valid date in the past
            'conditions' => 'array',
            'conditions.*' => 'exists:conditions,id',
        ];
    }
}

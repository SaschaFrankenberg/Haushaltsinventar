<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => ['required','string','min:3'],
            'category_id' => ['required','integer','exists:categories,id','array'],
            'location_id' => ['required','integer','exists:locations,id','array'],
            'quantity' => ['required','numeric','min:0'],
            'unit' => ['required','string'],
            'expires_at' => ['nullable','date'],
            'notes' => ['nullable','max:200'],
        ];
    }
}

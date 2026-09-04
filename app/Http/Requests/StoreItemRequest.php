<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

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
            'name' => ['required', 'string', 'min:3'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'location_id' => ['required', 'integer', 'exists:locations,id'],
            'quantity' => ['required', 'numeric', 'min:0'],
            'unit' => ['required', 'string'],
            'expires_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string', 'max:200'],
        ];
    }

    // Fehlermeldungen aus dem Formular werden hier gespeichert
    public function messages(): array
    {
        return [
            'name.required' => 'Bezeichnung ist erforderlich.',
            'name.min' => 'Bezeichnung muss mindestens 3 Zeichen lang sein.',
            'category_id.required' => 'Wähle eine Kategorie aus.',
            'category_id.exists' => 'Ungültige Kategorie.',
            'location_id.required' => 'Wähle einen Lagerort aus.',
            'location_id.exists' => 'Kein Lagerort gefunden?',
            'quantity.required' => 'Feld darf nicht leer sein.',
            'quantity.numeric' => 'Es muss eine Zahl eingegeben werden.',
            'quantity.min' => 'Feld darf nicht leer sein.',
            'unit.required' => 'Feld darf nicht leer sein.',
            'unit.string' => 'Die Einheit muss ein Text sein.',
            'expires_at.date' => 'Das MHD muss ein gültiges Datum sein.',
            'notes.string' => 'Die Notiz muss ein Text sein.',
            'notes.max' => 'Die Notiz darf maximal 200 Zeichen lang sein.',
        ];
    }
}

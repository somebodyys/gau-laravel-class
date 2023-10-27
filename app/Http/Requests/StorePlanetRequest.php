<?php

namespace App\Http\Requests;

use Exception;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanetRequest extends FormRequest
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
            'name' => 'required|string',
            'diameter' => 'required|numeric',
            'description' => 'required|string',
            'atmosphere' => 'required|boolean',
            'minerals' => 'required|array',
            'minerals.*' => 'required|array',
            'minerals.*.name' => 'required|string',
            'minerals.*.code' => 'sometimes|integer',
            'email' => 'required|email'
        ];
    }

    /**
     * @throws Exception
     */
    protected function prepareForValidation(): void
    {
        if (!$this->get('atmosphere'))
            throw new Exception('We dont need Planet without atmosphere!');

        $description = 'This is the planet ' . $this->get('name') . '  with diameter ' . $this->get('diameter');

        $this->merge([
            'description' => $description,
            'email' => strtolower($this->get('name')) . '@planet.org'
        ]);
    }

    public function messages()
    {
        return [
            'name.required' => 'This is updated required validation!'
        ];
    }
}

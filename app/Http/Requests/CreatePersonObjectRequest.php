<?php

namespace App\Http\Requests;

use App\Classes\Person;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatePersonObjectRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer|min:0|max:100',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'sex' => [
                'required',
                'string',
                Rule::in(Person::$SEXES)
            ],
            'birthday' => 'required|date'
        ];
    }
}

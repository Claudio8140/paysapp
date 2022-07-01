<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContinentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:20',
                'unique:continents,name',
            ],
            'capitale' => [
                'required',
                'string',
                'unique:continents,capitale',
            ],
            'superficie' => [
                'required',
                'string',
                'unique:continents,superficie',
            ],
            'president' => [
                'required',
                'string',
                'max:20',
                'unique:continents,president',
            ],
            'population' => [
                'required',
                'string',
                'unique:continents,population',
                // 'digit:10'
            ],
            'presentation' => [
                'required',
                'string',
                'max:800',
                'unique:continents,presentation',
            ],
        ];

        return $rules;
    }
}

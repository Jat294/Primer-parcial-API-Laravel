<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VechicleRequest extends FormRequest
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
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|min:1900|max:2022',
            'type' => 'required|in:car,truck,motorcycle',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'is_available' => 'required|boolean'
        ];
    }
}

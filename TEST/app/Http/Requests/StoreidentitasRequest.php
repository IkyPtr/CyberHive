<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreidentitasRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'umur' => 'required|integer',
            'no_hp' => 'required|string|max:14',
            'motivasi' => 'required|string',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLabRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ruang_lab' => 'required|string',
            'tanggal' => 'required|date',
            'monitor' => 'required|string',
            'keyboard' => 'required|string',
            'mouse' => 'required|string',
            'jaringan' => 'required|string',
            'keterangan' => 'nullable|string',
            'alat' => 'required|string',
        ];
    }
}

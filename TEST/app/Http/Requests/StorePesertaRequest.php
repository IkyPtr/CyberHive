<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesertaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:100',
            'nim_nip' => 'required|string|max:20',
            'ruang_lab' => 'required|string',
            'tanggal' => 'required|date',
            'monitor' => 'required|string',
            'keyboard' => 'required|string',
            'mouse' => 'required|string',
            'jaringan' => 'required|string',
            'nomor_pc' => 'required|string',
        ];
    }
}

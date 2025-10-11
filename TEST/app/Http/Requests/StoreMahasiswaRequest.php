<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
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
            'nim' => 'required|string|max:20',
            'kelas' => 'required|string|max:50',
            'ruang_lab' => 'required|string',
            'tanggal' => 'required|date',
            'matakuliah' => 'required|string',
            'dosen' => 'required|string',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
            'no_loker' => 'nullable|string',
            'nomor_pc' => 'nullable|string',
            'monitor' => 'nullable|string',
            'keyboard' => 'nullable|string',
            'mouse' => 'nullable|string',
            'jaringan' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'alat' => 'nullable|string',
        ];
    }

}

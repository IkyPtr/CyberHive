<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKoordinatorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'nim_nip' => 'required|string|max:50',
            'email' => 'required|email',
            'jumlah' => 'required|integer|min:1',
            'kegiatan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'ruang_lab' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'alat' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama harus diisi.',
            'nim_nip.required' => 'NIM/NIP wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'jumlah.required' => 'Jumlah peserta harus diisi.',
            'kegiatan.required' => 'Nama kegiatan wajib diisi.',
            'tanggal_mulai.required' => 'Tanggal mulai wajib diisi.',
            'tanggal_selesai.required' => 'Tanggal selesai wajib diisi.',
            'ruang_lab.required' => 'Ruang lab wajib diisi.',
        ];
    }
}

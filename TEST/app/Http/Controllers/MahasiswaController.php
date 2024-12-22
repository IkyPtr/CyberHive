<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('labs')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.kuliah_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        // Simpan data mahasiswa
        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'lab_id' => uniqid(), // Generate unique ID untuk relasi
        ]);

        // Simpan data lab yang berelasi
        $mahasiswa->labs()->create([
            'ruang_lab' => $request->ruang_lab,
            'tanggal' => $request->tanggal,
            'matakuliah' => $request->matakuliah,
            'dosen' => $request->dosen,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
            'monitor' => $request->monitor,
            'keyboard' => $request->keyboard,
            'mouse' => $request->mouse,
            'jaringan' => $request->jaringan,
            'keterangan' => $request->keterangan,
            'alat' => $request->alat,
            'no_loker' => $request->no_loker,
            'nomor_pc' => $request->nomor_pc,
            'lab_id' => $mahasiswa->lab_id
        ]);
        return redirect('/')
            ->with('success', 'Data mahasiswa berhasil ditambahkan! Terima kasih atas partisipasinya.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}

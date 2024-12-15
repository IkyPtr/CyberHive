<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesertaRequest $request)
    {
        $peserta = Peserta::create([
            'id_ps' => uniqid(),
            'nama' => $request->nama,
            'nim_nip' => $request->nim_nip,
            'lab_id' => uniqid()
        ]);
        $peserta->labs()->create([
            'ruang_lab' => $request->ruang_lab,
            'tanggal' => $request->tanggal,
            'matakuliah' => '-',
            'dosen' => '-',
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
            'monitor' => $request->monitor,
            'keyboard' => $request->keyboard,
            'mouse' => $request->mouse,
            'jaringan' => $request->jaringan,
            'keterangan' => $request->keterangan,
            'alat' => $request->alat,
            'no_loker' => '-',
            'lab_id' => $peserta->lab_id
        ]);
        return redirect()->back()->with('success', 'Data koordinator berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesertaRequest $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}

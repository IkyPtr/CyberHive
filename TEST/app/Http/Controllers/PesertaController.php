<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;
use App\Models\Lab;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::with('labs')->get();
        return view('Admin.peserta_index', compact('peserta'));
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
            'monitor' => $request->monitor,
            'keyboard' => $request->keyboard,
            'mouse' => $request->mouse,
            'jaringan' => $request->jaringan,
            'keterangan' => $request->keterangan,
            'alat' => $request->alat,
            'nomor_pc' => $request->nomor_pc,
            'no_loker' => '-',
            'lab_id' => $peserta->lab_id
        ]);

        return redirect('/logkeg')->with('success', 'SELAMAT DATA ANDA SEBAGAI PESERTA BERHASIL DISIMPAN');
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
    public function destroy($id)
    {
        $peserta = Peserta::find($id);
        if ($peserta) {
            Lab::where('lab_id', $peserta->lab_id)->delete();
            $peserta->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }
}

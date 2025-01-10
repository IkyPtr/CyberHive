<?php

namespace App\Http\Controllers;

use App\Models\Koordinator;
use App\Http\Requests\StoreKoordinatorRequest;
use App\Http\Requests\UpdateKoordinatorRequest;

class KoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koordinators = Koordinator::with('labs')->get();
        return view('Admin.koordinator_index', ['koordinators' => $koordinators]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Koordinator.koordinator_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKoordinatorRequest $request)
    {
        $koordinator = Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => $request->nama,
            'nim_nip' => $request->nim_nip,
            'email' => $request->email,
            'jumlah' => $request->jumlah,
            'kegiatan' => $request->kegiatan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'keterangan_status' => '-',
            'status' => 'pending',
            'lab_id' => uniqid()
        ]);

        $koordinator->labs()->create([
            'ruang_lab' => $request->ruang_lab,
            'keterangan' => $request->keterangan,
            'alat' => $request->alat,
            'lab_id' => $koordinator->lab_id,
            'nomor_pc' => '-',
            'no_loker' => '-',
            'tanggal' => $request->tanggal_mulai,
            'monitor' => '-',
            'keyboard' => '-',
            'mouse' => '-',
            'jaringan' => '-',
        ]);

        return redirect('/logkeg')->with('success', 'SELAMAT DATA ANDA SEBAGAI KOORDINATOR KEGIATAN BERHASIL DISIMPAN');
    }


    /**
     * Display the specified resource.
     */
    public function show(Koordinator $koordinator)
    {
        return view('Admin.Laporan.PrintKoor', [
            'koordinator' => $koordinator
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Koordinator $koordinator, UpdateKoordinatorRequest $request)
    {
        return view('Admin.laporan_koordinator', [
            'koordinator' => $koordinator,
            'status' => $request->status
        ]);
    }

    public function update(UpdateKoordinatorRequest $request, Koordinator $koordinator)
    {
        $koordinator->update([
            'status' => $request->status,
            'keterangan_status' => $request->keterangan_status
        ]);

        return redirect()->route('koordinator.index')
            ->with('success', 'Status koordinator berhasil diupdate');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Koordinator $koordinator)
    {
        //
    }
}

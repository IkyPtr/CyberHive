<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lab;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
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
        return view('Admin.Admin_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ruang_lab' => 'required',
            'matakuliah' => 'required',
            'kelas' => 'required'
        ]);

        $matchingData = Lab::rightJoin('mahasiswas', 'labs.lab_id', '=', 'mahasiswas.lab_id')
            ->where('labs.ruang_lab', $request->ruang_lab)
            ->where('labs.matakuliah', $request->matakuliah)
            ->where('mahasiswas.kelas', $request->kelas)
            ->select('mahasiswas.*', 'labs.*')
            ->orderBy('mahasiswas.created_at', 'desc')
            ->paginate(10);

        return view('Admin.Admin_index', compact('matchingData'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

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
    public function index()
    {
        $matchingData = Lab::rightJoin('mahasiswas', 'labs.lab_id', '=', 'mahasiswas.lab_id')
            ->rightJoin('matakuliahs', 'labs.lab_id', '=', 'matakuliahs.lab_id')
            ->where('labs.ruang_lab', session('search.ruang_lab'))
            ->where('matakuliahs.matakuliah', session('search.matakuliah'))
            ->where('mahasiswas.kelas', session('search.kelas'))
            ->select('mahasiswas.*', 'labs.*', 'matakuliahs.*')
            ->orderBy('mahasiswas.created_at', 'desc')
            ->paginate(10);

        return view('Admin.Admin_index', compact('matchingData'));
    }
    public function create()
    {
        return view('Admin.Admin_create');
    }
    public function store(Request $request)
    {
        session(['search.ruang_lab' => $request->ruang_lab]);
        session(['search.matakuliah' => $request->matakuliah]);
        session(['search.kelas' => $request->kelas]);
        return redirect()->route('admin.search');
    }
    public function show(Admin $admin)
    {
        //
    }
    public function edit(Admin $admin)
    {
        //
    }
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }
    public function destroy(Lab $admin)
    {
        //
    }
}

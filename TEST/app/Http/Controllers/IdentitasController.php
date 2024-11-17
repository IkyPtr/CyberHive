<?php

namespace App\Http\Controllers;

use App\Models\identitas;
use App\Http\Requests\StoreidentitasRequest;
use App\Http\Requests\UpdateidentitasRequest;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('identitas.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('identitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreidentitasRequest $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'umur' => 'required|integer',
            'no_hp' => 'required|string|max:14',
            'motivasi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validated['foto'] = $imageName;
        }

        Identitas::create($validated);

        return redirect()->route('identitas.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(identitas $identitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(identitas $identitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateidentitasRequest $request, identitas $identitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(identitas $identitas)
    {
        //
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeknisiController;

// Landing page
Route::view('/', 'index_awal');

// Authentication routes
Route::view('/login', 'login');
Route::post('/session', [SessionController::class, 'store'])->name('session.store');

// Resource Controllers
Route::resources([
    'mahasiswa' => MahasiswaController::class,
    'koordinator' => KoordinatorController::class,
    'peserta' => PesertaController::class,
    'teknisi' => TeknisiController::class,
    'lab' => \App\Http\Controllers\LabController::class,
]);

// Peserta Routes
Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        if (!session('admin')) {
            return redirect('/login');
        }
        return view('Admin.Admin_pilihan');
    })->name('admin.dashboard');

    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/search', [AdminController::class, 'index'])->name('admin.search');
    Route::get('/Koor', [KoordinatorController::class, 'index'])->name('admin.koordinator.index');
    Route::get('/koordinator/{koordinator}/edit', [KoordinatorController::class, 'edit'])->name('admin.koordinator.edit');
    Route::put('/koordinator/{koordinator}', [KoordinatorController::class, 'update'])->name('admin.koordinator.update');
    Route::get('/koordinator/{koordinator}/print', [KoordinatorController::class, 'show'])
        ->name('admin.koordinator.print');
    Route::get('/Peserta', [PesertaController::class, 'index'])->name('admin.peserta.index');
});

// Teknisi Routes
Route::prefix('teknisi')->group(function () {
    Route::view('/login', 'Teknisi.teknisi_login');
    Route::get('/selesai', [TeknisiController::class, 'show'])->name('teknisi.selesai');
});

// Log Routes
Route::view('/logkeg', 'logkeg');
Route::get('/logper', function () {
    return view('Mahasiswa.kuliah_create');
});
Route::get('/logkeg/KOOR', function () {
    return view('Koordinator.koordinator_create');
});

// Delete Routes (nama diganti untuk menghindari duplikasi)
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.custom.destroy');  // Nama diganti dari 'mahasiswa.destroy'
Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.custom.destroy');  // Nama diganti dari 'peserta.destroy'

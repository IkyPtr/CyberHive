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
    'teknisi' => TeknisiController::class
]);

// Peserta Routes
Route::prefix('peserta')->group(function () {
    Route::get('/', function () {
        return view('Peserta.peserta_index');
    });
    Route::get('/create', function () {
        return view('Peserta.peserta_create');
    });
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        if (!session('admin')) {
            return redirect('/login');
        }
        return view('Admin.Admin_pilihan');
    })->name('admin.dashboard');

    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/search', [AdminController::class, 'index'])->name('admin.search');
    Route::get('/Koor', [KoordinatorController::class, 'index'])->name('koordinator.index');
    Route::get('/Peserta', [PesertaController::class, 'index'])->name('peserta.index');
});

// Teknisi Routes
// Add these routes in your teknisi group
Route::prefix('teknisi')->group(function () {
    Route::view('/login', 'Teknisi.teknisi_login');
    Route::get('/', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::delete('/destroy/{id}', [TeknisiController::class, 'destroy'])->name('teknisi.destroy');
});



// Log Routes
Route::view('/logkeg', 'logkeg');
Route::get('/logper', function () {
    return view('Mahasiswa.kuliah_create');
});
Route::get('/logkeg/KOOR', function () {
    return view('Koordinator.koordinator_create');
});
// Add this delete route
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');

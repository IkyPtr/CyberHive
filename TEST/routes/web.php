<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;
use App\Models\identitas;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\PesertaController;
use App\Models\Peserta;
use App\Http\Controllers\SessionController;
Route::resources([
    'mahasiswa' => MahasiswaController::class,
    'koordinator' => KoordinatorController::class,
    'peserta' => PesertaController::class
]);

Route::view('/', 'index_awal');

Route::prefix('peserta')->group(function () {
    Route::get('/', function () {
        return view('Peserta.peserta_index');
    });
    Route::get('/create', function () {
        return view('Peserta.peserta_create');
    });
});

Route::get('/mahasiswa/create', function () {
    return view('Mahasiswa.kuliah_create');
});

Route::view('/login', 'login');

Route::view('/logkeg', 'logkeg');

Route::get('/logper', function () {
    return view('Mahasiswa.kuliah_create');;
});

Route::get('/logkeg/KOOR', function () {
    return view('Koordinator.koordinator_create');
});

Route::prefix('admin')->group(function () {
    Route::get('/create', function () {
        return view('Admin.Admin_create');
    });
    Route::get('/index', function () {
        return view('Admin.Admin_index');
    });
    Route::get('/Koor', [KoordinatorController::class, 'index'])->name('koordinator.index');

    Route::get('/Peserta', function () {
        return view('Admin.peserta_index');
    });
});

Route::post('/session', [SessionController::class, 'store'])->name('session.store');

Route::get('/admin/dashboard', function() {
    if (!session('admin')) {
        return redirect('/login');
    }
    return view('Admin.Admin_pilihan');
})->name('admin.dashboard');

Route::get('/teknisi/dashboard', function() {
    return view('teknisi');
})->name('teknisi.dashboard');

Route::view('/teknisi/login', 'Teknisi.teknisi_login');

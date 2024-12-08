<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;
use App\Models\identitas;

Route::get('/', function () {
    return view('index_awal');
});
Route::get('/peserta', function () {
    return view('Peserta.peserta_index');
});
Route::get('/peserta/create', function () {
    return view('Peserta.peserta_create');
});
Route::get('/mahasiswa/create', function () {
    return view('Mahasiswa.kuliah_create');
});
Route::get('/login', function () {
    return view('login');;
});
Route::get('/logper', function () {
    return view('logper');;
});
Route::get('/logkeg', function () {
    return view('logkeg');;
});
Route::get('/logkeg/KOOR', function () {
    return view('Koordinator.koordinator_create');
});

Route::get('/admin/create', function () {
    return view('Admin.Admin_create');;
});

// Route::resource('identitas', IdentitasController::class);
// Route::get('/rezki', function() {
//     $identitas = Identitas::find(1);
//     return view('identitas.rezki', compact('identitas'));
// })->name('rezki');

// Route::get('/aqila', function() {
//     $identitas = Identitas::find(2);
//     return view('identitas.aqila', compact('identitas'));
// })->name('aqila');

// Route::get('/giska', function() {
//     $identitas = Identitas::find(3);
//     return view('identitas.giska', compact('identitas'));
// })->name('giska');

// Route::get('/abyaz', function() {
//     $identitas = Identitas::find(4);
//     return view('identitas.abyaz', compact('identitas'));
// })->name('abyaz');
// Route::get('/fadhel', function() {
//     $identitas = Identitas::find(5);
//     return view('identitas.fadhel', compact('identitas'));
// })->name('fadhel');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;
use App\Models\identitas;

Route::get('/', function () {
    return view('identitas.tampil');;
});


Route::resource('identitas', IdentitasController::class);
Route::get('/rezki', function() {
    $identitas = Identitas::find(1);
    return view('identitas.rezki', compact('identitas'));
})->name('rezki');

Route::get('/aqila', function() {
    $identitas = Identitas::find(2);
    return view('identitas.aqila', compact('identitas'));
})->name('aqila');

Route::get('/giska', function() {
    $identitas = Identitas::find(3);
    return view('identitas.giska', compact('identitas'));
})->name('giska');

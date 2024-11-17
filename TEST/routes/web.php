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

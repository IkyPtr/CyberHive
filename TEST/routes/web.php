<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;

Route::get('/', function () {
    return view('identitas.tampil');;
});


Route::resource('identitas', IdentitasController::class);

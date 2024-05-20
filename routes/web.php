<?php

use App\Http\Controllers\KepalaSuratController;
use App\Http\Controllers\NamaTandatanganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('headmail', KepalaSuratController::class);
Route::resource('users', UserController::class);
Route::resource('signature', NamaTandatanganController::class);
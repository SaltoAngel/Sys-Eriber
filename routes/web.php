<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/olvido-contrasena', [LoginController::class, 'olvidoContrasena'])->name('olvido-contrasena');

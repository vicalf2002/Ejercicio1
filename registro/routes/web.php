<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroControlador;
use App\Http\Controllers\RestControlador;
use Illuminate\Support\Facades\DB;

Route::get('/', [RestControlador::class, 'index']);

Route::get('/asistentes', [RestControlador::class, 'index']);

Route::get('/registro/crear', [RestControlador::class, 'create']);

Route::post('/registro/crear', [RestControlador::class, 'store']);

Route::get('/registro', function () {
    return view('/registro/registro');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

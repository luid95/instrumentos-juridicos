<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubrogadosController;
use App\Http\Controllers\ServiciosGeneralesController;
use App\Http\Controllers\RecursosMaterialesController;
use App\Http\Controllers\UserController;


// Invitados
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// Autenticados
Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/subrogados', [SubrogadosController::class, 'index'])->name('subrogados.index');
    Route::get('/servicios-generales', [ServiciosGeneralesController::class, 'index'])->name('s-generales.index');
    Route::get('/recursos-materiales', [RecursosMaterialesController::class, 'index'])->name('r-materiales.index');

    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
});

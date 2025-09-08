<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\PasswordController;

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

    // Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{usuario}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{usuario}', [UserController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{usuario}', [UserController::class, 'destroy'])->name('usuarios.destroy');



    Route::get('/password/change', [App\Http\Controllers\Auth\PasswordController::class, 'edit'])->name('password.edit');
    Route::put('/password/change', [App\Http\Controllers\Auth\PasswordController::class, 'update'])->name('password.update');
});

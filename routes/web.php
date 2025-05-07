<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ProfileController;


Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/productos', [PaginaController::class, 'productos'])->name('productos');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [ProfileController::class, 'mostrar'])->name('perfil.mostrar');
    Route::get('/perfil/edit', [ProfileController::class, 'editar'])->name('perfil.edit');
    Route::post('/perfil/actualizar', [ProfileController::class, 'update'])->name('perfil.actualizar');

});
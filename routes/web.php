<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;



Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/productos', [PaginaController::class, 'productos'])->name('productos');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CentroReciclajeController;

// Rutas del CRUD de usuarios
Route::resource('users', UserController::class);

// Rutas de búsqueda de centros
Route::get('/buscarCentros', [CentroReciclajeController::class, 'buscar'])->name('buscarCentros');

// Rutas del HomeController
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/auth/login', [HomeController::class, 'login']);
Route::get('/perfil', [HomeController::class, 'perfil']);

// Rutas del Controller principal
Route::get('/', [Controller::class, 'inicio']);
Route::get('/busquedaCentros', [Controller::class, 'centros']);
Route::get('/acerca', [Controller::class, 'acerca_de']);
Route::get('/contactanos', [Controller::class, 'contacto']);
Route::get('/informacion', [Controller::class, 'info']);
Route::get('/buscadorC', [Controller::class, 'buscador']);

// Rutas de autenticación
Auth::routes();

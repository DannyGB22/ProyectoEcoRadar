<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'index']);
Route::get('/auth/login', [HomeController::class, 'login']);
Route::get('/perfil', [HomeController::class, 'perfil']);




Route::get('/', [Controller::class, 'inicio']);
route::get('/busquedaCentros', [Controller::class, 'centros']);
route::get('/acerca', [Controller::class, 'acerca_de']);
route::get('/contactanos', [Controller::class, 'contacto']);
route::get('/informacion', [Controller::class, 'info']);
route::get('/buscadorC', [Controller::class, 'buscador']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

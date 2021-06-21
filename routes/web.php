<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaDeCalificacionesController;
use App\Models\ListaDeCalificaciones;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lista', ListaDeCalificacionesController::class)->middleware("auth");

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\ListaDeCalificacionesController::class, 'index'])->name('home');


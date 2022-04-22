<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('establecimientos', App\Http\Controllers\EstablecimientoController::class)->middleware('auth');
Route::resource('medicos', App\Http\Controllers\MedicoController::class)->middleware('auth');
Route::resource('medicamentos', App\Http\Controllers\MedicamentoController::class)->middleware('auth');
Route::resource('recetas', App\Http\Controllers\RecetaController::class)->middleware('auth');
Route::resource('detalles', App\Http\Controllers\DetalleController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

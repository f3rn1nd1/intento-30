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
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('experiencias', App\Http\Controllers\ExperienciaController::class);
Route::resource('educaciones', App\Http\Controllers\EducacioneController::class);
Route::resource('idiomas', App\Http\Controllers\IdiomaController::class);
Route::resource('postulantes', App\Http\Controllers\PostulanteController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

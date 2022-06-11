<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComisionEncuestaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ResultadoEncuestaController;

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

Route::get('', function () {
    return view('layouts');
})->name("");
Route::get('resultado-encuesta', [ResultadoEncuestaController::class, 'index'])->name("resultado.index");
Route::get('comision-encuesta', [ComisionEncuestaController::class, 'index'])->name("comision.index");
Route::get('docente', [DocenteController::class, 'index'])->name("docente.index");
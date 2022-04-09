<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DespliegueController;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\SistemaAsociadoController;
use App\Http\Controllers\ContextoEmpresaController;
use App\Http\Controllers\IdentificacionRiesgoController;
use App\Http\Controllers\FactorRiesgoController;
use App\Http\Controllers\AnalisisRiesgoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('view.introduccion');
})->name('index');

//CONTEXTO EMPRESA
Route::get('/contexto-empresa', [ContextoEmpresaController::class, 'index'])->name('contexto-empresa');
Route::post('/contexto-empresa', [ContextoEmpresaController::class, 'store'])->name('agregar-contexto-empresa');
Route::get('/datos-contexto-empresa', [ContextoEmpresaController::class, 'show'])->name('ver-contexto-empresa');

//IDENTIFICACIÓN RIESGO
Route::get('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'index'])->name('identificacion-riesgo');
Route::post('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'store'])->name('agregar-identificacion-riesgo');
Route::get('/datos-identificacion-riesgo', [IdentificacionRiesgoController::class, 'show'])->name('ver-identificacion-riesgo');

//ANÁLISIS RIESGO
Route::get('/analisis-riesgo', [AnalisisRiesgoController::class, 'index'])->name('analisis-riesgo');
Route::post('/analisis-riesgo', [AnalisisRiesgoController::class, 'store'])->name('agregar-analisis-riesgo');

Route::get('/sistema-general', function () {
    return view('view.sistema-general');
})->name('sistema-general');

Route::get('/sgc', function () {
    return view('view.sgc');
})->name('sgc');

Route::get('/sga', function () {
    return view('view.sga');
})->name('sga');

Route::get('/sgsst', function () {
    return view('view.sst');
})->name('sgsst');

//DATOS PARA LLENAR LOS FORMULARIOS
Route::get('/sistema-asociado', [SistemaAsociadoController::class, 'index']);
Route::get('/despliegue', [DespliegueController::class, 'index']);
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/opcion', [OpcionController::class, 'index']);
Route::get('/opcion/{id}', [OpcionController::class, 'show']);
Route::get('/variable', [VariableController::class, 'index']);
Route::get('/variable/{id}', [VariableController::class, 'show']);
Route::get('/factor-riesgo', [FactorRiesgoController::class, 'index']);

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
use App\Http\Controllers\SistemaGeneralController;
use App\Http\Controllers\SGCalidadController;
use App\Http\Controllers\SGAmbientalController;
use App\Http\Controllers\SGSstController;
use App\Models\SGSst;

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

//SISTEMA GENERAL
Route::get('/sistema-general', [SistemaGeneralController::class, 'index'])->name('sistema-general');
Route::post('/sistemageneral', [SistemaGeneralController::class, 'store'])->name('agregar-sistema-general');


//SISTEMA GESTION CALIDAD
Route::get('/sgc', [SGCalidadController::class, 'index'])->name('sgc');

//SISTEMA GESTION AMBIENTAL
Route::get('/sga', [SGAmbientalController::class, 'index'])->name('sga');
Route::post('/sga', [SGAmbientalController::class, 'store'])->name('agregar-sga');


//SISTEMA GESTION SST
Route::get('/sgsst', [SGSstController::class, 'index'])->name('sgsst');

//IDENTIFICACIÓN RIESGO
Route::get('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'index'])->name('identificacion-riesgo');
Route::post('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'store'])->name('agregar-identificacion-riesgo');
Route::get('/datos-identificacion-riesgo', [IdentificacionRiesgoController::class, 'show'])->name('ver-identificacion-riesgo');

//ANÁLISIS RIESGO
Route::get('/analisis-riesgo', [AnalisisRiesgoController::class, 'index'])->name('analisis-riesgo');

//DATOS PARA LLENAR LOS FORMULARIOS
Route::get('/sistema-asociado', [SistemaAsociadoController::class, 'index']);
Route::get('/despliegue', [DespliegueController::class, 'index']);
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/opcion', [OpcionController::class, 'index']);
Route::get('/opcion/{id}', [OpcionController::class, 'show']);
Route::get('/variable', [VariableController::class, 'index']);
Route::get('/variable/{id}', [VariableController::class, 'show']);
Route::get('/factor-riesgo', [FactorRiesgoController::class, 'index']);

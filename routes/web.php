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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SistemaGeneralController;
use App\Http\Controllers\SGCalidadController;
use App\Http\Controllers\SGAmbientalController;
use App\Http\Controllers\SGSstController;
use App\Http\Controllers\UserController;
use App\Models\SGSst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// use App\Models\User;
// dd(User::all()->toArray());

// gonzalo pantoja osorio

Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('post-register');

//LOGIN
Route::get('/', function () {
    $user = Auth::user();
    return view('view.introduccion', compact('user'));
})->name('index')->middleware('auth');

Route::get('/login', function () {
    return view('view.login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//CONTEXTO EMPRESA
Route::get('/contexto-empresa', [ContextoEmpresaController::class, 'index'])->name('contexto-empresa')->middleware('auth');
Route::post('/contexto-empresa', [ContextoEmpresaController::class, 'store'])->name('agregar-contexto-empresa');
Route::get('/datos-contexto-empresa', [ContextoEmpresaController::class, 'show'])->name('ver-contexto-empresa');

//SISTEMA GENERAL
Route::get('/sistema-general', [SistemaGeneralController::class, 'index'])->name('sistema-general')->middleware('auth');
Route::post('/sistemageneral', [SistemaGeneralController::class, 'store'])->name('agregar-sistema-general');
Route::get('/datos-sistemageneral', [SistemaGeneralController::class, 'show'])->name('result-sg');

//SISTEMA GESTION CALIDAD
Route::get('/sgc', [SGCalidadController::class, 'index'])->name('sgc')->middleware('auth');
Route::post('/sgc', [SGCalidadController::class, 'store'])->name('agregar-sgc');

//SISTEMA GESTION AMBIENTAL
Route::get('/sga', [SGAmbientalController::class, 'index'])->name('sga')->middleware('auth');
Route::post('/sga', [SGAmbientalController::class, 'store'])->name('agregar-sga');

//SISTEMA GESTION SST
Route::get('/sgsst', [SGSstController::class, 'index'])->name('sgsst')->middleware('auth');
Route::post('/sgsst', [SGSstController::class, 'store'])->name('agregar-sgsst');

//IDENTIFICACIÓN RIESGO
Route::get('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'index'])->name('identificacion-riesgo')->middleware('auth');
Route::post('/identificacion-riesgo', [IdentificacionRiesgoController::class, 'store'])->name('agregar-identificacion-riesgo');
Route::get('/datos-identificacion-riesgo', [IdentificacionRiesgoController::class, 'show'])->name('ver-identificacion-riesgo');

//ANÁLISIS RIESGO
Route::get('/analisis-riesgo', [AnalisisRiesgoController::class, 'index'])->name('analisis-riesgo')->middleware('auth');
Route::post('/analisis-riesgo', [AnalisisRiesgoController::class, 'store'])->name('agregar-analisis-riesgo');

//DATOS PARA LLENAR LOS FORMULARIOS
Route::get('/sistema-asociado', [SistemaAsociadoController::class, 'index']);
Route::get('/despliegue', [DespliegueController::class, 'index']);
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/opcion', [OpcionController::class, 'index']);
Route::get('/opcion/{id}', [OpcionController::class, 'show']);
Route::get('/variable', [VariableController::class, 'index']);
Route::get('/variable/{id}', [VariableController::class, 'show']);
Route::get('/factor-riesgo', [FactorRiesgoController::class, 'index']);

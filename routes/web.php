<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DespliegueController;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\SistemaAsociadoController;
use App\Http\Controllers\ContextoEmpresaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('view.introduccion');
})->name('index');

Route::get('/contexto-empresa', [ContextoEmpresaController::class, 'index'])->name('contexto-empresa');
Route::post('/contexto-empresa', [ContextoEmpresaController::class, 'store'])->name('agregar-contexto-empresa');

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


Route::get('/sistema-asociado', [SistemaAsociadoController::class, 'index']);
Route::get('/despliegue', [DespliegueController::class, 'index']);
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/opcion', [OpcionController::class, 'index']);
Route::get('/opcion/{id}', [OpcionController::class, 'show']);
Route::get('/variable/', [VariableController::class, 'index']);

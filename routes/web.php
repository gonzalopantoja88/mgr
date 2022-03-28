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
    return view('view.introduccion');
})->name('index');

Route::get('/contexto-empresa', function () {
    return view('view.contexto-empresa');
})->name('contexto-empresa');

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
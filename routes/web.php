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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


//Rutas
Route::get('/solicitudServicio', function() {return view('vistas.solicitud-servicio');});

Route::get('/datosPrestador', function() {return view('vistas.datos-prestador');});

Route::get('/registroAutorizacion', function() {return view('vistas.registro-autorizacion');});

Route::get('/anexoTecnico', function() {return view('vistas.anexo-tecnico');});

Route::get('/solicitudPrivado1', function() {return view('vistas.solicitud-sector-privado-1');});
Route::get('/solicitudPrivado2', function() {return view('vistas.solicitud-sector-privado-2');});
Route::get('/solicitudPrivado3', function() {return view('vistas.solicitud-sector-privado-3');});

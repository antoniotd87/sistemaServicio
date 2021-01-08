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


//Ruta Ver Perfil
//Route::get('/perfil', function() {return view('vistas.perfil.show-perfil');});
Route::get('/perfil/{estudiante}', [App\Http\Controllers\EstudianteController::class, 'show'])->name('estudiantes.show');

Route::get('/perfil/{administrador}', [App\Http\Controllers\AdministradorController::class, 'show'])->name('administradores.show');

//Rutas Alumnos

Route::get('/solicitudServicio/{estudiante}', [App\Http\Controllers\SolicitudServicioController::class, 'edit'])->name('solicitudServicio.edit');
Route::put('/solicitudServicio/{estudiante}', [App\Http\Controllers\SolicitudServicioController::class, 'update'])->name('solicitudServicio.update');


Route::get('/datosPrestador/{estudiante}', [App\Http\Controllers\DatosPrestadorController::class, 'edit'])->name('datosPrestador.edit');
Route::put('/datosPrestador/{estudiante}', [App\Http\Controllers\DatosPrestadorController::class, 'update'])->name('datosPrestador.update');


Route::get('/registroAutorizacion/{estudiante}', [App\Http\Controllers\RegistroAutorizacionController::class, 'edit'])->name('registroAutorizacion.edit');
Route::put('/registroAutorizacion/{estudiante}', [App\Http\Controllers\RegistroAutorizacionController::class, 'update'])->name('registroAutorizacion.update');

Route::get('/anexoTecnico/{estudiante}', [App\Http\Controllers\AnexoTecnicoController::class, 'edit'])->name('anexoTecnico.edit');
Route::put('/anexoTecnico/{estudiante}', [App\Http\Controllers\AnexoTecnicoController::class, 'update'])->name('anexoTecnico.update');

Route::get('/solicitudPrivado1/{estudiante}', [App\Http\Controllers\SolicitudPrivado1Controller::class, 'edit'])->name('solicitudPrivado1.edit');
Route::put('/solicitudPrivado1/{estudiante}', [App\Http\Controllers\SolicitudPrivado1Controller::class, 'update'])->name('solicitudPrivado1.update');

Route::get('/solicitudPrivado2/{estudiante}', [App\Http\Controllers\SolicitudPrivado2Controller::class, 'edit'])->name('solicitudPrivado2.edit');
Route::put('/solicitudPrivado2/{estudiante}', [App\Http\Controllers\SolicitudPrivado2Controller::class, 'update'])->name('solicitudPrivado2.update');

Route::get('/solicitudPrivado3/{estudiante}', [App\Http\Controllers\SolicitudPrivado3Controller::class, 'edit'])->name('solicitudPrivado3.edit');
Route::put('/solicitudPrivado3/{estudiante}', [App\Http\Controllers\SolicitudPrivado3Controller::class, 'update'])->name('solicitudPrivado3.update');

//Route::resource('estudiantes','EstudiantesController');

//Rutas Administradores
Route::get('/seguimiento/principal', function() {return view('vistas.admin.seguimiento-principal');});
Route::get('/seguimiento/inscripcion', function() {return view('vistas.admin.seguimiento-inscripcion');});
Route::get('/seguimiento/bajas', function() {return view('vistas.admin.seguimiento-bajas');});
Route::get('/seguimiento/liberaciones', function() {return view('vistas.admin.seguimiento-liberaciones');});
Route::get('/seguimiento/porConcluir', function() {return view('vistas.admin.seguimiento-por-concluir');});
Route::get('/archivos/ver', function() {return view('vistas.admin.archivos-ver');});
Route::get('/archivos/agregar', function() {return view('vistas.admin.archivos-agregar');});
Route::get('/constancias/generar', function() {return view('vistas.admin.constancias-generar');});
Route::get('/usuarios/importar', function() {return view('vistas.admin.usuario-importar');});
Route::get('/usuarios/ver', function() {return view('vistas.admin.usuario-ver');});
Route::get('/usuarios/crear', function() {return view('vistas.admin.usuario-crear');});
Route::get('/usuarios/recuperar', function() {return view('vistas.admin.usuario-recuperar');});
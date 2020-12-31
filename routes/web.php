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

Route::get('/datosPrestador', function() {return view('vistas.alumno.datos-prestador');});

Route::get('/registroAutorizacion', function() {return view('vistas.alumno.registro-autorizacion');});

Route::get('/anexoTecnico', function() {return view('vistas.alumno.anexo-tecnico');});

Route::get('/solicitudPrivado1', function() {return view('vistas.alumno.solicitud-sector-privado-1');});
Route::get('/solicitudPrivado2', function() {return view('vistas.alumno.solicitud-sector-privado-2');});
Route::get('/solicitudPrivado3', function() {return view('vistas.alumno.solicitud-sector-privado-3');});

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
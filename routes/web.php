<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsuarioAdminController;
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
    return redirect('home');
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
Route::put('/registroAutorizacion/{estudiante}', [App\Http\Controllers\RegistroAutorizacionController::class, 'edit'])->name('registroAutorizacion.update');

Route::get('/anexoTecnico', function() {return view('vistas.alumno.anexo-tecnico');});

Route::get('/solicitudPrivado1', function() {return view('vistas.alumno.solicitud-sector-privado-1');});
Route::get('/solicitudPrivado2', function() {return view('vistas.alumno.solicitud-sector-privado-2');});
Route::get('/solicitudPrivado3', function() {return view('vistas.alumno.solicitud-sector-privado-3');});

//Route::resource('estudiantes','EstudiantesController');

//Rutas Administradores
Route::get('/seguimiento/principal',[App\Http\Controllers\SeguimientoAdminController::class, 'principal']);
Route::get('/seguimiento/inscripcion',[App\Http\Controllers\SeguimientoAdminController::class, 'inscripcion']);
Route::get('/seguimiento/bajas',[App\Http\Controllers\SeguimientoAdminController::class, 'baja']);
Route::get('/seguimiento/liberaciones',[App\Http\Controllers\SeguimientoAdminController::class, 'liberacion']);
Route::get('/seguimiento/porConcluir',[App\Http\Controllers\SeguimientoAdminController::class, 'porConcluir']);

Route::get('/archivos/ver', function() {return view('vistas.admin.archivos-ver');});
Route::get('/archivos/agregar', function() {return view('vistas.admin.archivos-agregar');});
Route::get('/constancias/generar', function() {return view('vistas.admin.constancias-generar');});

Route::get('/usuarios/importar',[App\Http\Controllers\UsuarioAdminController::class,'import']);
Route::get('/usuarios/ver',[App\Http\Controllers\UsuarioAdminController::class,'index']);
Route::get('/usuarios/crear',[App\Http\Controllers\UsuarioAdminController::class,'create']);
Route::post('/usuarios/crear',[App\Http\Controllers\UsuarioAdminController::class,'store'])->name('usuarios.store');
Route::put('/usuarios/recuperar',[App\Http\Controllers\UsuarioAdminController::class,'update'])->name('usuarios.update');
Route::get('/usuarios/recuperar',[App\Http\Controllers\UsuarioAdminController::class,'recuperar']);
<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificacionControler;
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

Route::get('/perfil/{administrador}/admin', [App\Http\Controllers\AdministradorController::class, 'show'])->name('administradores.show');

//Rutas Alumnos

Route::get('/solicitudServicio/{estudiante}', [App\Http\Controllers\SolicitudServicioController::class, 'edit'])->name('solicitudServicio.edit');
Route::put('/solicitudServicio/{estudiante}', [App\Http\Controllers\SolicitudServicioController::class, 'update'])->name('solicitudServicio.update');
Route::get('/solicitudServicio/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'solicitudServicio'])->name('solicitudServicio.imprimir');

Route::get('/datosPrestador/{estudiante}', [App\Http\Controllers\DatosPrestadorController::class, 'edit'])->name('datosPrestador.edit');
Route::put('/datosPrestador/{estudiante}', [App\Http\Controllers\DatosPrestadorController::class, 'update'])->name('datosPrestador.update');
Route::get('/datosPrestador/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'datosPrestador'])->name('datosPrestador.imprimir');

Route::get('/registroAutorizacion/{estudiante}', [App\Http\Controllers\RegistroAutorizacionController::class, 'edit'])->name('registroAutorizacion.edit');
Route::put('/registroAutorizacion/{estudiante}', [App\Http\Controllers\RegistroAutorizacionController::class, 'update'])->name('registroAutorizacion.update');
Route::get('/registroAutorizacion/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'registroAutorizacion'])->name('registroAutorizacion.imprimir');

Route::get('/anexoTecnico/{estudiante}', [App\Http\Controllers\AnexoTecnicoController::class, 'edit'])->name('anexoTecnico.edit');
Route::put('/anexoTecnico/{estudiante}', [App\Http\Controllers\AnexoTecnicoController::class, 'update'])->name('anexoTecnico.update');
Route::get('/anexoTecnico/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'anexoTecnico'])->name('anexoTecnico.imprimir');

Route::get('/solicitudPrivado1/{estudiante}', [App\Http\Controllers\SolicitudPrivado1Controller::class, 'edit'])->name('solicitudPrivado1.edit');
Route::put('/solicitudPrivado1/{estudiante}', [App\Http\Controllers\SolicitudPrivado1Controller::class, 'update'])->name('solicitudPrivado1.update');
Route::get('/solicitudPrivado1/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'privado1'])->name('solicitudPrivado1.imprimir');

Route::get('/solicitudPrivado2/{estudiante}', [App\Http\Controllers\SolicitudPrivado2Controller::class, 'edit'])->name('solicitudPrivado2.edit');
Route::put('/solicitudPrivado2/{estudiante}', [App\Http\Controllers\SolicitudPrivado2Controller::class, 'update'])->name('solicitudPrivado2.update');
Route::get('/solicitudPrivado2/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'privado2'])->name('solicitudPrivado2.imprimir');

Route::get('/solicitudPrivado3/{estudiante}', [App\Http\Controllers\SolicitudPrivado3Controller::class, 'edit'])->name('solicitudPrivado3.edit');
Route::put('/solicitudPrivado3/{estudiante}', [App\Http\Controllers\SolicitudPrivado3Controller::class, 'update'])->name('solicitudPrivado3.update');
Route::get('/solicitudPrivado3/imprimir/{estudiante}', [App\Http\Controllers\PDFController::class, 'privado3'])->name('solicitudPrivado3.imprimir');

Route::get('/bimestral/{estudiante}', [App\Http\Controllers\ReporteBimestralController::class, 'edit'])->name('bimestral.edit');
Route::put('/bimestral/{estudiante}', [App\Http\Controllers\ReporteBimestralController::class, 'update'])->name('bimestral.update');

Route::get('/trimestral/{estudiante}', [App\Http\Controllers\ReporteTrimestralController::class, 'edit'])->name('trimestral.edit');
Route::put('/trimestral/{estudiante}', [App\Http\Controllers\ReporteTrimestralController::class, 'update'])->name('trimestral.update');



//Route::resource('estudiantes','EstudiantesController');

//Rutas Administradores
Route::get('/informacion/{amdinistrador}', [App\Http\Controllers\AdministradorController::class, 'edit'])->name('informacion.edit');
Route::put('/informacion/{administrador}', [App\Http\Controllers\AdministradorController::class, 'update'])->name('informacion.update');
Route::get('/informacion', [App\Http\Controllers\AdministradorController::class, 'info'])->name('informacion.info');


Route::get('/seguimiento/principal',[App\Http\Controllers\SeguimientoAdminController::class, 'principal']);
Route::get('/seguimiento/inscripcion',[App\Http\Controllers\SeguimientoAdminController::class, 'inscripcion']);
Route::get('/seguimiento/bajas',[App\Http\Controllers\SeguimientoAdminController::class, 'baja']);
Route::get('/seguimiento/liberaciones',[App\Http\Controllers\SeguimientoAdminController::class, 'liberacion']);
Route::get('/seguimiento/porConcluir',[App\Http\Controllers\SeguimientoAdminController::class, 'porConcluir']);

Route::resource('archivos', ArchivosHistoricosController::class);

Route::get('/constancias',[App\Http\Controllers\EstudianteController::class, 'constancias']);

Route::get('/constancias/pdf/{id}', [App\Http\Controllers\EstudianteController::class, 'pdf'])->name('estudiante_pdf');

Route::get('/seguimiento/porConcluir',[App\Http\Controllers\SeguimientoAdminController::class, 'porConcluir']);

Route::get('/usuarios/importar',[App\Http\Controllers\UsuarioAdminController::class,'import']);
Route::get('/usuarios/ver',[App\Http\Controllers\UsuarioAdminController::class,'index']);
Route::get('/usuarios/crear',[App\Http\Controllers\UsuarioAdminController::class,'create']);
Route::post('/usuarios/crear',[App\Http\Controllers\UsuarioAdminController::class,'store'])->name('usuarios.store');
Route::put('/usuarios/recuperar',[App\Http\Controllers\UsuarioAdminController::class,'update'])->name('usuarios.update');
Route::get('/usuarios/recuperar',[App\Http\Controllers\UsuarioAdminController::class,'recuperar']);

Route::get('notificacion',[App\Http\Controllers\NotificacionControler::class,'index'])->name('notificacion.index');
Route::get('notificacion/${notificacion}',[App\Http\Controllers\NotificacionControler::class,'showDocument'])->name('notificacion.ver');
Route::put('notificacion/${id}',[App\Http\Controllers\NotificacionControler::class,'sendMessage'])->name('notificacion.mensaje');

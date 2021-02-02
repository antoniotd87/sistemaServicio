<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Entidad;
use App\Models\EntidadReceptora;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EntidadReceptoraController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EntidadController;
use App\Models\User;
use App\Notifications\Mensaje;

class RegistroAutorizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        if(!isset($estudiante->seguimiento->entidades)){
            return redirect()->route('solicitudServicio.edit',['estudiante' => $estudiante->id]);
        }else{
            return view('vistas.alumno.registro-autorizacion', compact('estudiante'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->update([
            'EST_carrera' => $request->carreraAlumno,
            'EST_sexo' => $request->sexoAlumno,
            'EST_promedio' => $request->promedioAlumno,
        ]);
        $estudianteController = new EstudianteController();
        $estudianteController->updateOfRegistroAutorizacion($request,$estudiante);
         //Instanciamos a los controladores para poder utilizarlos
        $entidadReceptora = new EntidadReceptoraController();
        $area = new AreaController();
        $entidad = new EntidadController();
        //Si ya existen relaciones, solo ahy que actualizar las tablas
        if (isset($estudiante->seguimiento->entidades)) {
            //Obtenemos el modelo que queremos editar y llamamos al metodo en el controller
            $entidadReceptoraModel = $estudiante->seguimiento->entidades->entidad;
            $entidadReceptora->updateOfRegistroAutorizacion($request,$entidadReceptoraModel);
        }
        //Creacion del PDF
        //Probablemente se haga un controler exclusivo para pdf's
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'fechaentrega' => $request->fechaDependencia,
            'estudiante' => $request->apellidoPaternoAlumno . ' ' . $request->apellidoMaternoAlumno . ' ' . $request->nombreAlumno,
            'correo' => $request->correoAlumno,
            'edad' => $request->edadAlumno,
            'sexo' => $request->sexoAlumno,
            'carrera' => $request->carreraAlumno,
            'creditos' => $request->creditosAlumno,
            'promedio' => $request->promedioAlumno,
            'dependencia' => $request->nombreDependencia,
            'tipo' => $request->tipoDependencia,
            'area' => $request->areaServicioSocial,
            'domicilio' => $request->calleDependencia . ', ' . $request->domicilioDependencia . ', ' . $request->codigoPostalDependencia . ', ' . $request->municipioDependencia,
            'municipio' => $request->municipioDependencia,
            'telefono' => $request->telefonoDependencia,
            'responsable' => $request->responsableDependencia . ' ' .$request->apellidoPaternoResponsable . ' ' . $request->apellidoMaternoResponsable . ', ' . $request->cargoResponsable,
            'programa' => $request->programaDependencia,
            'actividades' => $request->actividadesDependencia,
            'horario' => $request->horarioDependencia,
            'entrada' => $request->entradaDependencia,
            'salida' => $request->salidaDependencia,
            'inicio' => $request->inicioDependencia,
            'termino' => $request->terminoDependencia,
            'horas' => $request->horasDependencia,
        ];
        $admin = User::find(1);
        $mensaje = 'Creacion de registro autorizacion';
        $admin->notify(new Mensaje(auth()->user()->estudiante, $mensaje, 'RegistroAutorizacion'));
        $pdf->loadView('pdf.registroautorizacion', $datos);
        //Se descarga el pdf y se regresa a la vista
        return $pdf->download('mi-archivo.pdf');
        return view('vistas.alumno.registro-autorizacion', compact('estudiante'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

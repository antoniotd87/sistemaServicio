<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Entidad;
use App\Models\EntidadReceptora;
use App\Models\Estudiante;
use App\Models\JefeInmediato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EntidadReceptoraController;
use App\Http\Controllers\JefeInmediatoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EntidadController;
use App\Models\User;
use App\Notifications\Mensaje;

class SolicitudServicioController extends Controller
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('vistas.alumno.solicitud-servicio', compact('estudiante'));
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
        //Instanciamos a los controladores para poder utilizarlos
        $estudianteController = new EstudianteController();
        $estudianteController->updateOfSolicitudServicio($request,$estudiante);
        $entidadReceptora = new EntidadReceptoraController();
        $jefeInmediato = new JefeInmediatoController();
        $area = new AreaController();
        $entidad = new EntidadController();
        $estado = new EstadoController();
        //Si ya existen relaciones, solo ahy que actualizar las tablas
        if (isset($estudiante->seguimiento->entidades)) {
            //Obtenemos el modelo que queremos editar y llamamos al metodo en el controller
            $entidadReceptoraModel = $estudiante->seguimiento->entidades->entidad;
            $entidadReceptora->updateOfSolicitudServicio($request, $entidadReceptoraModel);

            $jefeInmediatoModel = $estudiante->seguimiento->entidades->jefeInmediatos;
            $jefeInmediato->updateOfSolicitudServicio($request, $jefeInmediatoModel);

            $areaModel = $estudiante->seguimiento->entidades->area;
            $area->updateOfSolicitudServicio($request, $areaModel);
            // Envio de correos
            $admin = User::find(1);
            $mensaje = 'Creacion de la solicitud de servicio social';
            $admin->notify(new Mensaje($estudiante, $mensaje,'SolicitudServicio'));
        } else {
            //Si no hay relaciones, se crean las tablas y se relacionan con el estudiante
            //Se llama al metodo store de el controlador para poder insertar el registro
            $idER = $entidadReceptora->store($request);

            $idJI = $jefeInmediato->store($request);

            $idA = $area->store($request);
            //Se guardan los id's de los registros anteriores en la tabla entidad
            //tambien desde su controlador
            $datos = [
                'er_id' => $idER,
                'ji_id' => $idJI,
                'a_id' => $idA
            ];

            $idE = $entidad->store($datos);
            //Se actualiza la tabla seguimiento
            $estudiante->seguimiento->update(['entidad_id' => $idE]);
            //$estudiante->seguimiento->e();

            // Envio de mensaje
            $admin = User::find(1);
            $mensaje = 'Creacion de la solicitud de servicio social';
            $admin->notify(new Mensaje($estudiante, $mensaje,'SolicitudServicio'));
        }



        //Creacion del PDF
        //Probablemente se haga un controler exclusivo para pdf's
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'fecha' => $fecha,
            'municipio' => $request->municipioDependencia,
            'dependencia' => $request->nombreDependencia,
            'responsable' => $request->responsableDependencia . ' ' . $request->apellidoPaternoResponsable . ' ' . $request->apellidoMaternoResponsable,
            'cargo' => $request->cargoResponsable,
            'area' => $request->areaServicioSocial,
            'jefe' => $request->jefeInmediato . ' ' . $request->paternoInmediato . ' ' . $request->maternoInmediato . ' ' . $request->cargoJefeInmediato,
            'estudiante' => $request->nombreAlumno . ' ' . $request->apellidoPaternoAlumno . ' ' . $request->apellidoMaternoAlumno,
            'carrera' => $request->carreraAlumno . ' ' . $request->grupoAlumno,
            'cuenta' => $request->cuentaAlumno,
            'creditos' => $request->creditosAlumno,
            'correo' => $request->correoAlumno,
            'telefono' => $request->telefonoAlumno,
            'domicilio' => $request->domicilioAlumno,
            'edad' => $request->edadAlumno,
            'semestre' => $request->semestreAlumno,
        ];
        $pdf->loadView('pdf.solicitudservicio', $datos);
        //Se descarga el pdf y se regresa a la vista
        return $pdf->download('mi-archivo.pdf');




        return view('vistas.alumno.solicitud-servicio', compact('estudiante'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}

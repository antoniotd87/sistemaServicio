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
        $estudiante->update([
            'EST_numeroCuenta' => $request->cuentaAlumno,
            'EST_apellidoPaterno' => $request->apellidoPaternoAlumno,
            'EST_apellidoMaterno' => $request->apellidoMaternoAlumno,
            'EST_nombre' => $request->nombreAlumno,
            'EST_correo' => $request->correoAlumno,
            'EST_edad' => $request->edadAlumno,
            'EST_carrera' => $request->carreraAlumno,
            'EST_porcentajeCreditos' => $request->creditosAlumno,
            'EST_grupo' => $request->grupoAlumno,
            'EST_semestre' => $request->semestreAlumno,
            'EST_domicilio' => $request->domicilioAlumno,
            'EST_telefono' => $request->telefonoAlumno,
        ]);
        //Instanciamos a los controladores para poder utilizarlos
        $entidadReceptora = new EntidadReceptoraController();
        $jefeInmediato = new JefeInmediatoController();
        $area = new AreaController();
        $entidad = new EntidadController();
        //Si ya existen relaciones, solo ahy que actualizar las tablas
        if (isset($estudiante->seguimiento->entidades)) {
            //Obtenemos el modelo que queremos editar y llamamos al metodo en el controller
            $entidadReceptoraModel = $estudiante->seguimiento->entidades->entidad;
            $entidadReceptora->update($request,$entidadReceptoraModel);

            $jefeInmediatoModel = $estudiante->seguimiento->entidades->jefeInmediatos;
            $jefeInmediato->update($request,$jefeInmediatoModel);

            $areaModel = $estudiante->seguimiento->entidades->area;
            $area->update($request,$areaModel);
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

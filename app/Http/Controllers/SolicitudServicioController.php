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
            'EST_registroEstatalSS' => '',
            'EST_apellidoPaterno' => $request->apellidoPaternoAlumno,
            'EST_apellidoMaterno' => $request->apellidoMaternoAlumno,
            'EST_nombre' => $request->nombreAlumno,
            'EST_correo' => $request->correoAlumno,
            'EST_edad' => $request->edadAlumno,
            'EST_sexo' => '',
            'EST_carrera' => $request->carreraAlumno,
            'EST_promedio' => '',
            'EST_porcentajeCreditos' => $request->creditosAlumno,
            'EST_fechaNacimiento' => '',
            'EST_domicilio' => $request->domicilioAlumno,
            'EST_rfc' => '',
            'EST_curp' => '',
            'EST_telefono' => $request->telefonoAlumno,
            'EST_codigoPostal' => ''
        ]);
        //Si ya existen relaciones, solo ahy que actualizar las tablas
        if (isset($estudiante->seguimiento->entidades)) {
            return view('vistas.alumno.solicitud-servicio', compact('estudiante'));
        } else {
            //Si no hay relaciones, se crean las tablas y se relacionan con el estudiante

            $entidadReceptora = new EntidadReceptoraController();
            $idER = $entidadReceptora->store($request);

            $jefeInmediato = new JefeInmediatoController();
            $idJI = $jefeInmediato->store($request);

            $area = new AreaController();
            $idA = $area->store($request);

            $entidad = new EntidadController();
            $datos = [
                'er_id' => $idER,
                'ji_id' => $idJI,
                'a_id' => $idA
            ];
            $idE = $entidad->store($datos);

            $estudiante->seguimiento->update(['entidad_id' => $idE]);
            return view('vistas.alumno.solicitud-servicio', compact('estudiante'));
        }
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

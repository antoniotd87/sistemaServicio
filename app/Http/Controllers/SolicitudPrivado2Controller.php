<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudPrivado2Controller extends Controller
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
        if(!isset($estudiante->seguimiento->entidades)){
            return redirect()->route('solicitudServicio.edit',['estudiante' => $estudiante->id]);
        }else{
            return view('vistas.alumno.solicitud-sector-privado-2', compact('estudiante'));
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
        ]);
        //Creacion del PDF
        //Probablemente se haga un controler exclusivo para pdf's
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'municipio' => $request->municipioDependencia,
            'fecha' => $fecha,
            'responsable' => $request->responsableDependencia . ' ' .$request->apellidoPaternoResponsable . ' ' . $request->apellidoMaternoResponsable . ', ' . $request->cargoResponsable,
            'dependencia' => $request->nombreDependencia . ' ' . $request->calleDependencia . ' ' . $request->codigoPostalDependencia . ' ' . $request->municipioDependencia,
            'estudiante' => $request->nombreAlumno . ' ' . $request->apellidoPaternoAlumno . ' ' . $request->apellidoMaternoAlumno,
            'estudiante2' => $request->nombre2 . ' ' . $request->apellidoPaterno2 . ' ' . $request->apellidoMaterno2,
            'carrera' => $request->carreraAlumno,
            'cuenta' => $request->cuentaAlumno,
            'cuenta2' => $request->cuenta2,
            'area' => $request->areaServicioSocial,
            'entrada' => $request->entradaDependencia,
            'salida' => $request->salidaDependencia,
            'horario' => $request->horarioDependencia,
            'inicio' => $request->inicioDependencia,
            'termino' => $request->terminoDependencia,
            'estimulo' => $request->estimuloDependencia,
        ];
        $pdf->loadView('pdf.solicitudprivado2', $datos);
        //Se descarga el pdf y se regresa a la vista
        return $pdf->download('mi-archivo.pdf');
        return view('vistas.alumno.solicitud-sector-privado-2', compact('estudiante'));
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

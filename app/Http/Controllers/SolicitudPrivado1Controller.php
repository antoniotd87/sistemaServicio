<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\User;
use App\Notifications\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudPrivado1Controller extends Controller
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
        if (!isset($estudiante->seguimiento->entidades)) {
            return redirect()->route('solicitudServicio.edit', ['estudiante' => $estudiante->id]);
        } else {
            return view('vistas.alumno.solicitud-sector-privado-1', compact('estudiante'));
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
            'responsable' => $request->responsableDependencia . ' ' . $request->apellidoPaternoResponsable . ' ' . $request->apellidoMaternoResponsable . ', ' . $request->cargoResponsable,
            'dependencia' => $request->nombreDependencia . ' ' . $request->calleDependencia . ' ' . $request->codigoPostalDependencia . ' ' . $request->municipioDependencia,
            'estudiante' => $request->nombreAlumno . ' ' . $request->apellidoPaternoAlumno . ' ' . $request->apellidoMaternoAlumno,
            'carrera' => $request->carreraAlumno,
            'cuenta' => $request->cuentaAlumno,
            'area' => $request->areaServicioSocial,
            'entrada' => $request->entradaDependencia,
            'salida' => $request->salidaDependencia,
            'horario' => $request->horarioDependencia,
            'inicio' => $request->inicioDependencia,
            'termino' => $request->terminoDependencia,
        ];
        $admin = User::find(1);
        $mensaje = 'Creacion la solicitud de sector privado para una persona';
        $admin->notify(new Mensaje(auth()->user()->estudiante, $mensaje, 'SolicitudPrivado1'));
        $pdf->loadView('pdf.solicitudprivado1', $datos);
        //Se descarga el pdf y se regresa a la vista
        return $pdf->download('mi-archivo.pdf');
        return view('vistas.alumno.solicitud-sector-privado-1', compact('estudiante'));
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

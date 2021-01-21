<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\EntidadReceptora;
use App\Models\User;
use App\Notifications\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnexoTecnicoController extends Controller
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
            return view('vistas.alumno.anexo-tecnico', compact('estudiante'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntidadReceptora $estudiante)
    {
        $estudiante->update([
            'ENR_correo' => $request->correoDependencia,
            'ENR_estimulo' => $request->estimuloDependencia,
        ]);

        //Creacion del PDF
        //Probablemente se haga un controler exclusivo para pdf's
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            //'fechaentrega' => $request->fechaDependencia,
            'inicio' => $request->inicioDependencia,
            'termino' => $request->terminoDependencia,
            'dependencia' => $request->nombreDependencia,
            'area' => $request->areaServicioSocial,
            'responsable' => $request->responsableDependencia . ' ' . $request->apellidoPaternoResponsable . ' ' . $request->apellidoMaternoResponsable,
            'cargo' => $request->cargoResponsable,
            'direccion' => $request->calleDependencia . ', ' . $request->codigoPostalDependencia . ', ' . $request->municipioDependencia,
            'municipio' => $request->municipioDependencia,
            'codigopostal' => $request->codigoPostalDependencia,
            'telefono' => $request->telefonoDependencia,
            'correo' => $request->correoDependencia,
            'estimulo' => $request->estimuloDependencia,
            'carrera' => $request->carreraAlumno,
            'actividades' => $request->actividadesDependencia,
        ];
        $admin = User::find(1);
        $mensaje = 'Creacion de el anexo tecnico';
        $admin->notify(new Mensaje(auth()->user()->estudiante, $mensaje, 'AnexoTecnico'));
        $pdf->loadView('pdf.anexotecnico', $datos);
        //Se descarga el pdf y se regresa a la vista
        return $pdf->download('mi-archivo.pdf');
        return view('vistas.alumno.anexo-tecnico', compact('estudiante'));
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

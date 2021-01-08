<?php

namespace App\Http\Controllers;

use App\Models\EntidadReceptora;
use Illuminate\Http\Request;

class EntidadReceptoraController extends Controller
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
        $entidadReceptora = new EntidadReceptora();
        $entidadReceptora->ENR_fechaEntrega = $request->fechaDependencia;
        $entidadReceptora->ENR_nombre = $request->nombreDependencia;
        $entidadReceptora->ENR_calle = $request->calleDependencia;
        $entidadReceptora->ENR_domicilio = $request->domicilioDependencia;
        $entidadReceptora->ENR_municipio = $request->municipioDependencia;
        $entidadReceptora->ENR_codigoPostal = $request->codigoPostalDependencia;
        $entidadReceptora->ENR_telefono = $request->telefonoDependencia;
        $entidadReceptora->ENR_correo = $request->correoDependencia;
        $entidadReceptora->ENR_tipoEntidad = $request->tipoDependencia;
        $entidadReceptora->ENR_programaParticipa = $request->programaDependencia;
        $entidadReceptora->ENR_actividades = $request->actividadesDependencia;
        $entidadReceptora->ENR_horario = $request->horarioDependencia;
        $entidadReceptora->ENR_horaEntrada = $request->entradaDependencia;
        $entidadReceptora->ENR_HoraSalida = $request->salidaDependencia;
        $entidadReceptora->ENR_fechaInicio = $request->inicioDependencia;
        $entidadReceptora->ENR_fechaTermino = $request->terminoDependencia;
        $entidadReceptora->ENR_totalHoras = $request->horasDependencia;
        $entidadReceptora->ENR_estimulo = $request->estimuloDependencia;
        $entidadReceptora->save();
        $idER=$entidadReceptora->id;
        return $idER;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntidadReceptora  $entidadReceptora
     * @return \Illuminate\Http\Response
     */
    public function show(EntidadReceptora $entidadReceptora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntidadReceptora  $entidadReceptora
     * @return \Illuminate\Http\Response
     */
    public function edit(EntidadReceptora $entidadReceptora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntidadReceptora  $entidadReceptora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntidadReceptora $entidadReceptora)
    {
        $entidadReceptora->ENR_fechaEntrega = $request->fechaDependencia;
        $entidadReceptora->ENR_nombre = $request->nombreDependencia;
        $entidadReceptora->ENR_calle = $request->calleDependencia;
        $entidadReceptora->ENR_domicilio = $request->domicilioDependencia;
        $entidadReceptora->ENR_municipio = $request->municipioDependencia;
        $entidadReceptora->ENR_codigoPostal = $request->codigoPostalDependencia;
        $entidadReceptora->ENR_telefono = $request->telefonoDependencia;
        $entidadReceptora->ENR_correo = $request->correoDependencia;
        $entidadReceptora->ENR_tipoEntidad = $request->tipoDependencia;
        $entidadReceptora->ENR_programaParticipa = $request->programaDependencia;
        $entidadReceptora->ENR_actividades = $request->actividadesDependencia;
        $entidadReceptora->ENR_horario = $request->horarioDependencia;
        $entidadReceptora->ENR_horaEntrada = $request->entradaDependencia;
        $entidadReceptora->ENR_HoraSalida = $request->salidaDependencia;
        $entidadReceptora->ENR_fechaInicio = $request->inicioDependencia;
        $entidadReceptora->ENR_fechaTermino = $request->terminoDependencia;
        $entidadReceptora->ENR_totalHoras = $request->horasDependencia;
        $entidadReceptora->ENR_estimulo = $request->estimuloDependencia;
        $entidadReceptora->save();
    }

    public function Actulizar()
    {
        # code...
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntidadReceptora  $entidadReceptora
     * @return \Illuminate\Http\Response
     */
    
}

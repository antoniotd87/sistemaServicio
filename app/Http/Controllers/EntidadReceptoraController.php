<?php

namespace App\Http\Controllers;

use App\Models\EntidadReceptora;
use Illuminate\Http\Request;

class EntidadReceptoraController extends Controller
{
    public function store(Request $request)
    {
        $entidadReceptora = new EntidadReceptora();
        $entidadReceptora->ENR_fechaEntrega = $request->fechaDependencia;
        $entidadReceptora->ENR_nombre = $request->nombreDependencia;
        $entidadReceptora->ENR_municipio = $request->municipioDependencia;
        $entidadReceptora->save();
        $idER=$entidadReceptora->id;
        return $idER;
    }

    public function updateOfSolicitudServicio(Request $request, EntidadReceptora $entidadReceptora)
    {
        $entidadReceptora->ENR_fechaEntrega = $request->fechaDependencia;
        $entidadReceptora->ENR_nombre = $request->nombreDependencia;
        $entidadReceptora->ENR_municipio = $request->municipioDependencia;
        $entidadReceptora->save();
    }

    public function updateOfRegistroAutorizacion(Request $request, EntidadReceptora $entidadReceptora)
    {
        $entidadReceptora->ENR_fechaEntrega = $request->fechaDependencia;
        $entidadReceptora->ENR_tipoEntidad = $request->tipoDependencia;
        $entidadReceptora->ENR_sector = $request->sectorDependencia;
        $entidadReceptora->ENR_calle = $request->calleDependencia;
        $entidadReceptora->ENR_domicilio = $request->domicilioDependencia;
        $entidadReceptora->ENR_codigoPostal = $request->codigoPostalDependencia;
        $entidadReceptora->ENR_telefono = $request->telefonoDependencia;
        $entidadReceptora->ENR_programaParticipa = $request->programaDependencia;
        $entidadReceptora->ENR_actividades = $request->actividadesDependencia;
        $entidadReceptora->ENR_horario = $request->horarioDependencia;
        $entidadReceptora->ENR_horaEntrada = $request->entradaDependencia;
        $entidadReceptora->ENR_HoraSalida = $request->salidaDependencia;
        $entidadReceptora->ENR_fechaInicio = $request->inicioDependencia;
        $entidadReceptora->ENR_fechaTermino = $request->terminoDependencia;
        $entidadReceptora->ENR_totalHoras = $request->horasDependencia;
        $entidadReceptora->save();
    }
}

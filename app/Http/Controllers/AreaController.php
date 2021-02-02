<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function store(Request $request)
    {
        $area = new Area();
        //Aqui van mas parametros
        $area->ARA_nombre = $request->areaServicioSocial;
        $area->ARA_nombreResponsable = $request->responsableDependencia;
        $area->ARA_apellidoPaterno = $request->apellidoPaternoResponsable;
        $area->ARA_apellidoMaterno = $request->apellidoMaternoResponsable;
        $area->ARA_cargo = $request->cargoResponsable;
        $area->save();
        $idA=$area->id;
        return $idA;
    }
    public function updateOfSolicitudServicio(Request $request, Area $area)
    {
        $area->ARA_nombre = $request->areaServicioSocial;
        $area->ARA_nombreResponsable = $request->responsableDependencia;
        $area->ARA_apellidoPaterno = $request->apellidoPaternoResponsable;
        $area->ARA_apellidoMaterno = $request->apellidoMaternoResponsable;
        $area->ARA_cargo = $request->cargoResponsable;
        $area->save();
    }
    public function update(Request $request, Area $area)
    {
        $area->ARA_nombre = $request->areaServicioSocial;
        $area->ARA_nombreResponsable = $request->responsableDependencia;
        $area->ARA_apellidoPaterno = $request->apellidoPaternoResponsable;
        $area->ARA_apellidoMaterno = $request->apellidoMaternoResponsable;
        $area->ARA_cargo = $request->cargoResponsable;
        $area->save();
    }

}

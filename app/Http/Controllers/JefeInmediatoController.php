<?php

namespace App\Http\Controllers;

use App\Models\JefeInmediato;
use Illuminate\Http\Request;

class JefeInmediatoController extends Controller
{
    public function store(Request $request)
    {
        $jefeInmediato = new JefeInmediato();
        //Aqui van mas parametros
        $jefeInmediato->JEI_nombre = $request->jefeInmediato;
        $jefeInmediato->JEI_apellidoPaterno = $request->paternoInmediato;
        $jefeInmediato->JEI_apellidoMaterno = $request->maternoInmediato;
        $jefeInmediato->JEI_cargo = $request->cargoJefeInmediato;
        $jefeInmediato->save();
        $idJI=$jefeInmediato->id;
        return $idJI;
    }

    public function updateOfSolicitudServicio(Request $request, JefeInmediato $jefeInmediato)
    {
        $jefeInmediato->JEI_nombre = $request->jefeInmediato;
        $jefeInmediato->JEI_apellidoPaterno = $request->paternoInmediato;
        $jefeInmediato->JEI_apellidoMaterno = $request->maternoInmediato;
        $jefeInmediato->JEI_cargo = $request->cargoJefeInmediato;
        $jefeInmediato->save();
    }
    public function update(Request $request, JefeInmediato $jefeInmediato)
    {
        $jefeInmediato->JEI_nombre = $request->jefeInmediato;
        $jefeInmediato->JEI_apellidoPaterno = $request->paternoInmediato;
        $jefeInmediato->JEI_apellidoMaterno = $request->maternoInmediato;
        $jefeInmediato->JEI_cargo = $request->cargoJefeInmediato;

        $jefeInmediato->save();
    }

}

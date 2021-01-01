<?php

namespace App\Http\Controllers;

use App\Models\JefeInmediato;
use Illuminate\Http\Request;

class JefeInmediatoController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jefeInmediato = new JefeInmediato();
        //Aqui van mas parametros
        $jefeInmediato->JEI_nombre = $request->jefeInmediato;
        $jefeInmediato->JEI_cargo = $request->cargoJefeInmediato;

        $jefeInmediato->save();
        $idJI=$jefeInmediato->id;
        return $idJI;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JefeInmediato  $jefeInmediato
     * @return \Illuminate\Http\Response
     */
    public function show(JefeInmediato $jefeInmediato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JefeInmediato  $jefeInmediato
     * @return \Illuminate\Http\Response
     */
    public function edit(JefeInmediato $jefeInmediato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JefeInmediato  $jefeInmediato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JefeInmediato $jefeInmediato)
    {
        $jefeInmediato->JEI_nombre = $request->jefeInmediato;
        $jefeInmediato->JEI_cargo = $request->cargoJefeInmediato;

        $jefeInmediato->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JefeInmediato  $jefeInmediato
     * @return \Illuminate\Http\Response
     */
    public function destroy(JefeInmediato $jefeInmediato)
    {
        //
    }
}

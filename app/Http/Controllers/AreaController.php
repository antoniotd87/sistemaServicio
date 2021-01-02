<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->ARA_nombre = $request->areaServicioSocial;
        $area->ARA_nombreResponsable = $request->responsableDependencia;
        $area->ARA_apellidoPaterno = $request->apellidoPaternoResponsable;
        $area->ARA_apellidoMaterno = $request->apellidoMaternoResponsable;
        $area->ARA_cargo = $request->cargoResponsable;
        $area->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        //
    }
}

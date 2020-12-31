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
        $entidadReceptora->ENR_nombre = $request->nombreDependencia;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntidadReceptora  $entidadReceptora
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntidadReceptora $entidadReceptora)
    {
        //
    }
}

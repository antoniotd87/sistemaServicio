<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
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
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        return view('vistas.perfil.show-perfil',compact('administrador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
         return view('vistas.admin.acompletar-informacion', compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador)
    {
        $administrador->update([
            'UA_nombre' => $request->nombreAdmin,
            'UA_apellidoPaterno' => $request->apellidoPaternoAdmin,
            'UA_apellidoMaterno' => $request->apellidoMaternoAdmin,
            'UA_correo' => $request->correoAdmin,
            'UA_rol' => $request->rolAdmin,
            'UA_cargo' => $request->cargoAdmin,
        ]);
        return redirect('/informacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        //
    }
    public function info()
    {
        $administrador = auth()->user()->administrador;
        return view('vistas.admin.acompletar-informacion', compact('administrador'));
    }
}

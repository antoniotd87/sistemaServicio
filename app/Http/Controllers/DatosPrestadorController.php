<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request; 

class DatosPrestadorController extends Controller
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
        if(!isset($estudiante->seguimiento->entidades)){
            return redirect()->route('solicitudServicio.edit',['estudiante' => $estudiante->id]);
        }else{
            return view('vistas.alumno.datos-prestador', compact('estudiante'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante, $estudiante)
    {
        $estudiante->update([
            'EST_fechaNacimiento' => $request->fechaNacimientoAlumno,
            'EST_rfc' => $request->rfcAlumno,
            'EST_curp' => $request->curpAlumno,
            'EST_codigoPostal' => $request->codigoPostalAlumno
        ]);
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

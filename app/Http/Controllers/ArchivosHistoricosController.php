<?php

namespace App\Http\Controllers;

use App\Models\ArchivosHistoricos;
use Illuminate\Http\Request;

class ArchivosHistoricosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ArchivosHistoricos::all();
        return view('vistas.admin.archivos-ver', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.admin.archivos-agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'name' => 'required',
            'archivo' => 'required'
        ]);
        $ruta_imagen = $request['archivo']->store('upload-archivos-historicos', 'public');

        $archivosHistoricos = new ArchivosHistoricos();
        $archivosHistoricos->AHT_nombre = $request->name;
        $archivosHistoricos->AHT_ruta = $ruta_imagen;
        $archivosHistoricos->save();

        $datos = ArchivosHistoricos::all();
        return view('vistas.admin.archivos-ver', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArchivosHistoricos  $archivosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function show($archivosHistoricos)
    {
        $dato = ArchivosHistoricos::find($archivosHistoricos);
        // dd($datos);

        return $dato->AHT_ruta;
        // return $archivosHistoricos->AHT_ruta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArchivosHistoricos  $archivosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function edit(ArchivosHistoricos $archivosHistoricos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArchivosHistoricos  $archivosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArchivosHistoricos $archivosHistoricos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArchivosHistoricos  $archivosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArchivosHistoricos $archivosHistoricos)
    {
        //
    }
}

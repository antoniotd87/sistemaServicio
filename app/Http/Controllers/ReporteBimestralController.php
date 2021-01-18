<?php
 
namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteBimestralController extends Controller
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
     * @param  \App\Models\ReporteBimestral  $reporteBimestral
     * @return \Illuminate\Http\Response
     */
    public function show(ReporteBimestral $reporteBimestral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReporteBimestral  $reporteBimestral
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        if (!isset($estudiante->seguimiento->entidades)) {
            return redirect()->route('solicitudServicio.edit', ['estudiante' => $estudiante->id]);
        }
        return view('vistas.alumno.reporte-bimestral', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReporteBimestral  $reporteBimestral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReporteBimestral $reporteBimestral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReporteBimestral  $reporteBimestral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReporteBimestral $reporteBimestral)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
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
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('vistas.perfil.show-perfil',compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
    public function constancias()
    {
        $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->join('entidads', 'seguimientos.entidad_id', '=', 'entidads.id')
            ->join('entidad_receptoras', 'entidads.entidad_receptora_id', '=', 'entidad_receptoras.id')
            ->select('estudiantes.*', 'entidad_receptoras.ENR_sector')
            ->where('estados.STA_estado', '=', 'LIBERADO')
            ->get();
        $hombresPublico = 0;
        $mujeresPublico = 0;
        $hombresPrivado = 0;
        $mujeresPrivado = 0;
        foreach ($users as $user) {
            if ($user->ENR_sector == 'Publico') {

                $user->EST_sexo == 'Masculino' ? $hombresPublico++ : $mujeresPublico++;
            } else {
                $user->EST_sexo == 'Masculino' ? $hombresPrivado++ : $mujeresPrivado++;
            }
        }
        $datos = [
            $hombresPublico,
            $mujeresPublico,
            $hombresPrivado,
            $mujeresPrivado,
        ];
        $prestadors = Estudiante::all();
        //return $estudiantes;
        return view('vistas.admin.constancias-generar', compact('datos', 'users', 'prestadors'));
        
    }
    public function pdf(Request $request,$id)
    {
         $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->join('entidads', 'seguimientos.entidad_id', '=', 'entidads.id')
            ->join('entidad_receptoras', 'entidads.entidad_receptora_id', '=', 'entidad_receptoras.id')
            ->join('areas', 'entidads.area_id', '=', 'areas.id')
            ->select('estudiantes.id', 'estudiantes.EST_nombre', 'estudiantes.EST_apellidoMaterno', 'estudiantes.EST_apellidoPaterno', 'estudiantes.EST_carrera', 'entidad_receptoras.ENR_programaParticipa', 'areas.ARA_nombre', 'entidad_receptoras.ENR_nombre', 'entidad_receptoras.ENR_municipio', 'entidad_receptoras.ENR_fechaInicio', 'entidad_receptoras.ENR_fechaTermino')
            ->where('estudiantes.id','=',$id)
            ->orderBy('estudiantes.id','desc')->take(1)->get();

            $numalumno=Estudiante::select('EST_numeroCuenta')->where('id',$id)->get();
        
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d de %B del %G');
            $pdf = \PDF::loadView('pdf.generarconstancia',['users'=>$users, 'fecha'=>$fecha]);
        return $pdf->download('users-'.$numalumno[0]->EST_numeroCuenta.'.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\EntidadReceptora;
use App\Models\Estado;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeguimientoAdminController extends Controller
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function principal()
    {
        $total = Estudiante::count();
        $numInscritos = 0;
        $numBajas = 0;
        $numLiberados = 0;
        $numPorConcluir = 0;

        $numInscritosH = 0;
        $numBajasH = 0;
        $numLiberadosH = 0;
        $numPorConcluirH = 0;
        $numInscritosM = 0;
        $numBajasM = 0;
        $numLiberadosM = 0;
        $numPorConcluirM = 0;


        $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->select('estados.STA_estado', 'estudiantes.EST_sexo')
            ->get();

        foreach ($users as $user) {
            switch ($user->STA_estado) {
                case 'Inscrito':
                    $user->EST_sexo == 'Masculino' ? $numInscritosH++ : $numInscritosM++;
                    $numInscritos++;
                    break;
                case 'Baja':
                    $user->EST_sexo == 'Masculino' ? $numBajasH++ : $numBajasM++;
                    $numBajas++;
                    break;
                case 'Liberado':
                    $user->EST_sexo == 'Masculino' ? $numLiberadosH++ : $numLiberadosM++;
                    $numLiberados++;
                    break;
                case 'Por Concluir':
                    $user->EST_sexo == 'Masculino' ? $numPorConcluirH++ : $numPorConcluirM++;
                    $numPorConcluir++;
                    break;
                default:
                    break;
            }
        }
        //dd($users[0]->STA_estado);
        $datos = [
            'total' => $total,
            'inscritos' => $numInscritos,
            'bajas' => $numBajas,
            'liberados' => $numLiberados,
            'porConcluir' => $numPorConcluir,
            'hombres' => [
                $numInscritosH,
                $numBajasH,
                $numLiberadosH,
                $numPorConcluirH
            ],
            'mujeres' => [
                $numInscritosM,
                $numBajasM,
                $numLiberadosM,
                $numPorConcluirM
            ],
        ];

        //return $estudiantes;
        return view('vistas.admin.seguimiento-principal', compact('datos'));
    }

    public function inscripcion()
    {
        $datos = [
            'publicoM' => 0,
            'privadoM' => 0,
            'publicoH' => 0,
            'privadoH' => 0,
            'masculino' => 0,
            'femenino' => 0,
            'iiH' => 0,
            'icH' => 0,
            'iqH' => 0,
            'iiaH' => 0,
            'ierH' => 0,
            'cpH' => 0,
            'iiM' => 0,
            'icM' => 0,
            'iqM' => 0,
            'iiaM' => 0,
            'ierM' => 0,
            'cpM' => 0
        ];


        $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->join('entidads', 'seguimientos.entidad_id', '=', 'entidads.id')
            ->join('entidad_receptoras', 'entidads.entidad_receptora_id', '=', 'entidad_receptoras.id')
            ->select('entidad_receptoras.ENR_sector', 'estudiantes.EST_sexo', 'estudiantes.EST_carrera')
            ->get();

        foreach ($users as $user) {
            switch ($user->EST_carrera) {
                case 'Contador Publico':
                    $user->EST_sexo == 'Masculino' ? $datos['cpH']++ : $datos['cpM']++;
                    break;
                case 'Ingenieria Civil':
                    $user->EST_sexo == 'Masculino' ? $datos['icH']++ : $datos['icM']++;
                    break;
                case 'Ingenieria Informatica':
                    $user->EST_sexo == 'Masculino' ? $datos['iiH']++ : $datos['iiM']++;
                    break;
                case 'Ingenieria en Industrias Alimentarias':
                    $user->EST_sexo == 'Masculino' ? $datos['iiaH']++ : $datos['iiaM']++;
                    break;
                case 'Ingenieria en Energias Renovables':
                    $user->EST_sexo == 'Masculino' ? $datos['ierH']++ : $datos['ierM']++;
                    break;
                case 'Ingenieria Quimica':
                    $user->EST_sexo == 'Masculino' ? $datos['iqH']++ : $datos['iqM']++;
                    break;

                default:
                    # code...
                    break;
            }
            switch ($user->ENR_sector) {
                case 'Publico':
                    $user->EST_sexo == 'Masculino' ? $datos['publicoH']++ : $datos['publicoM']++;
                    break;
                case 'Privado':
                    $user->EST_sexo == 'Masculino' ? $datos['privadoM']++ : $datos['privadoH']++;
                    break;
                default:
                    # code...
                    break;
            }
            switch ($user->EST_sexo) {
                case 'Masculino':
                    $user->EST_sexo == 'Masculino' ? $datos['masculino']++ : $datos['femenino']++;
                    break;
                case 'Femenino':
                    $user->EST_sexo == 'Masculino' ? $datos['masculino']++ : $datos['femenino']++;
                    break;
                default:
                    # code...
                    break;
            }
        }
        $prestadors = Estudiante::all();
        $institucions = EntidadReceptora::all();

        //return $estudiantes;
        return view('vistas.admin.seguimiento-inscripcion', compact('datos', 'prestadors', 'institucions'));
    }

    public function baja()
    {
        $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->join('entidads', 'seguimientos.entidad_id', '=', 'entidads.id')
            ->join('entidad_receptoras', 'entidads.entidad_receptora_id', '=', 'entidad_receptoras.id')
            ->select('estudiantes.*', 'entidad_receptoras.ENR_sector')
            ->where('estados.STA_estado', '=', 'BAJA')
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
        //return $estudiantes;
        return view('vistas.admin.seguimiento-bajas', compact('datos', 'users'));
    }
    public function liberacion()
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
        //return $estudiantes;
        return view('vistas.admin.seguimiento-liberaciones', compact('datos', 'users'));
    }
    public function porConcluir()
    {
        $users = DB::table('estudiantes')
            ->join('seguimientos', 'estudiantes.id', '=', 'seguimientos.estudiante_id')
            ->join('estados', 'seguimientos.id', '=', 'estados.seguimiento_id')
            ->join('entidads', 'seguimientos.entidad_id', '=', 'entidads.id')
            ->join('entidad_receptoras', 'entidads.entidad_receptora_id', '=', 'entidad_receptoras.id')
            ->select('estudiantes.*', 'entidad_receptoras.ENR_sector')
            ->where('estados.STA_estado', '=', 'POR CONCLUIR')
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
        //return $estudiantes;
        return view('vistas.admin.seguimiento-por-concluir', compact('datos', 'users'));
    }
}

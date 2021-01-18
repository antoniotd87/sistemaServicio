<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Entidad;
use App\Models\EntidadReceptora;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EntidadReceptoraController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EntidadController;

class AnexoTecnicoController extends Controller
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
            return view('vistas.alumno.anexo-tecnico', compact('estudiante'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        return $request;
        $estudiante->update([
            'EST_carrera' => $request->carreraAlumno,
        ]);
         //Instanciamos a los controladores para poder utilizarlos
        $entidadReceptora = new EntidadReceptoraController();
        $area = new AreaController();
        $entidad = new EntidadController();
        //Si ya existen relaciones, solo ahy que actualizar las tablas
        if (isset($estudiante->seguimiento->entidades)) {
            //Obtenemos el modelo que queremos editar y llamamos al metodo en el controller
            $entidadReceptoraModel = $estudiante->seguimiento->entidades->entidad;
            $entidadReceptora->update($request,$entidadReceptoraModel);

            $areaModel = $estudiante->seguimiento->entidades->area;
            $area->update($request,$areaModel);
        } else {
            //Si no hay relaciones, se crean las tablas y se relacionan con el estudiante
            //Se llama al metodo store de el controlador para poder insertar el registro
            $idER = $entidadReceptora->store($request);

            $idA = $area->store($request);
            //Se guardan los id's de los registros anteriores en la tabla entidad
            //tambien desde su controlador
            $datos = [
                'er_id' => $idER,
                'a_id' => $idA
            ];

            $idE = $entidad->store($datos);
            //Se actualiza la tabla seguimiento
            $estudiante->seguimiento->update(['entidad_id' => $idE]);
        }
        return view('vistas.alumno.anexo-tecnico', compact('estudiante'));
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

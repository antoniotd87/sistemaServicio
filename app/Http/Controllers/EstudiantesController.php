<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiantes;

class EstudiantesController extends Controller
{
	public function index()
    {
        
    }
    public function store (Request $request)
    {
    	//$datosEstudiantes = request()->all();
    	$datosEstudiantes=request()->except('_token');
    	Estudiantes::insert($datosEstudiantes);
    	return response()->json($datosEstudiantes);
    }
}

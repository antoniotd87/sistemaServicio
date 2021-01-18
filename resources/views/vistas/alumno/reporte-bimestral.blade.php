@extends('adminlte::page')

@section('title', 'SistemaServicio')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Formato de evaluacion bimestral</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <form action="{{route('registroAutorizacion.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="frmRegistroAutorizacion">
                @csrf
                @method('PUT')
                <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Nombre del prestador de servicio social:</p>
    </div>
    <div class="mr-2 mb-3 flex-grow-1">
        <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control text-center"
            placeholder="Ingrese el nombre del alumno" value="{{$estudiante->EST_nombre}}">
    </div>
    <div class="mr-2 mb-3 flex-grow-1">
        <input type="text" name="apellidoPaternoAlumno" id="apellidoPaternoAlumno" class="form-control text-center"
            placeholder="Ingrese el apellido paterno" value="{{$estudiante->EST_apellidoPaterno}}">
    </div>
    <div class="mr-2 mb-3 flex-grow-1">
        <input type="text" name="apellidoMaternoAlumno" id="apellidoMaternoAlumno" class="form-control text-center"
            placeholder="Ingrese el apellido materno" value="{{$estudiante->EST_apellidoMaterno}}">
    </div>
    <div class="w-100"></div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Programa:</p>
    </div>
    <div>
        <input type="text" name="" id="" class="form-control text-center" value="Servicio social">
    </div>
    <div class="w-100"></div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Periodo de realización, del:</p>
    </div>

    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
        <input type="date" name="inicioDependencia" id="inicioDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">al</p>
    </div>

    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
        <input type="date" name="terminoDependencia" id="terminoDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino : '' }}">
    </div>
    <div class="w-100"></div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Indique a que bimestre corresponde. </p>
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Bimestre:</p> 
    </div>
    <div>
        <input type="text" name="" id="" class="form-control text-center" value="1">
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Tessfp.jpg" style="text-align: center;">

                <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                        <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg ml-1">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
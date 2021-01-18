@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud para empresas de sector privado para dos personas
    </h2>
@stop

@section('content')
    <form action="{{route('solicitudPrivado2.update', ['estudiante'=>$estudiante->id])}}" class="row text-center" id="solicitudPrivado2">
        @include('vistas.alumno.form-solicitud-privado-2')
    </form>
@stop

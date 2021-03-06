@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud para empresas de sector privado para una persona
    </h2>
@stop

@section('content')
@csrf
                @method('PUT')
    <form action="{{route('solicitudPrivado1.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="solicitudPrivado1">
        @include('vistas.alumno.form-solicitud-privado')
    </form>
@stop

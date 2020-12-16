@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud para empresas de sector privado para tres personas o mas
    </h2>
@stop

@section('content')
    <form action="" class="row text-center" id="solicitudPrivado3">
        @include('vistas.alumno.form-solicitud-privado-3')
    </form>
@stop

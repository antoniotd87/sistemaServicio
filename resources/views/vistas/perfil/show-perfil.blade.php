@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Informacion de tu cuenta
    </h2>
@stop

@section('content')
    @if (Auth::user()->tipo == 'admin')
        @include('vistas.perfil.perfil-admin')
    @else
        @include('vistas.perfil.perfil-student')
    @endif
@stop

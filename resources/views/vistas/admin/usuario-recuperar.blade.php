@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Recuperacion de Cuentas</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form action="{{ route('usuarios.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="subir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Nueva Contraseña</label>
                            <input type="text" name="pass" id="subir" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Recuperar" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
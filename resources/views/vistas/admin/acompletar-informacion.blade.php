@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Información</h1>
    <div class="card-body" style="text-align: center;">
                    <p class="mb-0">Apartado para acompletar la informacion del usuario administrador</p>
                </ul>
              </li>
                </div>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{route('informacion.update', ['administrador'=>$administrador])}}" method="post" class="row text-center">
                @csrf
                @method('PUT')
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nombreAdmin">Nombre:</label>
                    <input type="text" name="nombreAdmin" id="nombreAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->UA_nombre}}">
                </div>
                 <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoPaternoAdmin">Apellido Paterno:</label>
                    <input type="text" name="apellidoPaternoAdmin" id="apellidoPaternoAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->UA_apellidoPaterno}}">
                </div>
                 <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoMaternoAdmin">Apellido Materno:</label>
                    <input type="text" name="apellidoMaternoAdmin" id="apellidoMaternoAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->UA_apellidoMaterno}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="correoAdmin">Correo:</label>
                    <input type="text" name="correoAdmin" id="correoAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->usuario->email}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="rolAdmin">Rol:</label>
                    <input type="text" name="rolAdmin" id="rolAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->UA_rol}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="cargoAdmin">Cargo:</label>
                    <input type="text" name="cargoAdmin" id="cargoAdmin" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$administrador->UA_cargo}}">
                </div>
                <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                        <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg ml-1">
                    </div>
                </div>
            </form>
        </div>
        </div>
@stop

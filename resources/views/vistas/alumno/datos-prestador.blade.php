@extends('adminlte::page')

@section('title', 'SistemaServicio')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Datos del Prestador</h1>
    <p class="m-0 text-dark text-center">Informacion del Alumno</p>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="" class="row text-center" id="frmDatosPrestador">
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nombreAlumno">Nombre del Alumno:</label>
                    <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$estudiante->EST_nombre}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoPaternoAlumno">Apellido paterno:</label>
                    <input type="text" name="apellidoPaternoAlumno" id="apellidoPaternoAlumno"
                        class="form-control text-center" placeholder="Ingrese su apellido paterno" value="{{$estudiante->EST_apellidoPaterno}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoMaternoAlumno">Apellido materno:</label>
                    <input type="text" name="apellidoMaternoAlumno" id="apellidoMaternoAlumno"
                        class="form-control text-center" placeholder="Ingrese su apellido materno" value="{{$estudiante->EST_apellidoMaterno}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="fechaNacimientoAlumno">Fecha de nacimiento:</label>
                    <input type="date" name="fechaNacimientoAlumno" id="fechaNacimientoAlumno"
                        class="form-control text-center">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="edadAlumno">Edad:</label>
                    <input type="number" name="edadAlumno" id="edadAlumno" class="form-control text-center"
                        placeholder="Ingrese su edad" value="{{$estudiante->EST_edad}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="rfcAlumno">RFC:</label>
                    <input type="text" name="rfcAlumno" id="rfcAlumno" class="form-control text-center"
                        placeholder="Ingrese su RFC">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="curpAlumno">CURP:</label>
                    <input type="text" name="curpAlumno" id="curpAlumno" class="form-control text-center"
                        placeholder="Ingrese su CURP">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="codigoPostalAlumno">Codigo Postal:</label>
                    <input type="number" name="codigoPostalAlumno" id="codigoPostalAlumno" class="form-control text-center"
                        placeholder="Ingrese su codigo postal">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="telefonoAlumno">Telefono:</label>
                    <input type="number" name="telefonoAlumno" id="telefonoAlumno" class="form-control text-center"
                        placeholder="Ingrese su numero de telefono" value="{{$estudiante->EST_telefono}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="carreraAlumno">Perfil:</label>
                    <select name="carreraAlumno" id="carreraAlumno" class="form-control text-center">
                        <option value="{{$estudiante->EST_carrera}}">Seleccionar</option>
                        <option value="5">Contador Publico</option>
                        <option value="6">Informatica</option>
                        <option value="7">Civil</option>
                        <option value="8">Industrias Alimentarias</option>
                        <option value="9">Energias Renovables</option>
                        <option value="10">Quimica</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="carreraAlumno">Semestre:</label>
                    <select name="semestreAlumno" id="semestreAlumno" class="form-control text-center">
                        <option value="{{$estudiante->EST_semestre}}">Seleccionar</option>
                        <option value="5">5° Semestre</option>
                        <option value="6">6° Semestre</option>
                        <option value="7">7° Semestre</option>
                        <option value="8">8° Semestre</option>
                        <option value="9">9° Semestre</option>
                        <option value="10">10° Semestre</option>
                    </select>
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

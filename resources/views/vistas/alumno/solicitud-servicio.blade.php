@extends('adminlte::page') 


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud para tramitar el servicio social
    </h2>
@stop


@section('content')
    <div class="row">
        <div class="col-12">
            <h5 class="text-uppercase font-weight-bold">c.p. Angélica gonzález velázquez</h5>
            <h5 class="text-uppercase font-weight-bold">encargada del departamendo de servicio social y residencia
                profesional</h5>
            <h5 class="text-uppercase font-weight-bold">P r e s e n t e</h5>
            <p>Por medio de la presente me dirijo a usted de la manera mas atenta para solicitar, se me autorice realizar mi
                Servicio Social en:</p>
                <form action="{{route('solicitudServicio.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="solicitudDependencia">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 ">
                        <label for="municipioDependencia">Municipio de la dependencia:</label>
                        <input type="text" name="municipioDependencia" id="municipioDependencia"
                            class="form-control text-center" placeholder="Ingrese el nombre del municipio" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_municipio : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="nombreDependencia">Nombre de la dependencia o institución:</label>
                        <input type="text" name="nombreDependencia" id="nombreDependencia" class="form-control text-center"
                            placeholder="Ingrese el nombre de la dependencia" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_nombre : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="responsableDependencia">Responsable de SS en la dependencia:</label>
                        <input type="text" name="responsableDependencia" id="responsableDependencia"
                            class="form-control text-center" placeholder="Ingrese el nombre del responsable" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombreResponsable : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="apellidoPaternoResponsable">Apellido paterno del responsable de SS:</label>
                        <input type="text" name="apellidoPaternoResponsable" id="apellidoPaternoResponsable"
                            class="form-control text-center" placeholder="Ingrese su apellido paterno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="apellidoMaternoResponsable">Apellido materno del responsable de SS:</label>
                        <input type="text" name="apellidoMaternoResponsable" id="apellidoMaternoResponsable"
                            class="form-control text-center" placeholder="Ingrese su apellido materno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="cargoResponsable">Cargo del responsable de SS:</label>
                        <input type="text" name="cargoResponsable" id="cargoResponsable" class="form-control text-center"
                            placeholder="Ingrese cargo del responsable" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_cargo : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="areaServicioSocial">Area donde se realizara el SS:</label>
                        <input type="text" name="areaServicioSocial" id="areaServicioSocial" class="form-control text-center"
                            placeholder="Ingrese el nombre del area" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombre : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="jefeInmediato">Nombre del jefe inmediato:</label>
                        <input type="text" name="jefeInmediato" id="jefeInmediato" class="form-control text-center"
                            placeholder="Ingrese el nombre del jefe inmediato" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->jefeInmediatos->JEI_nombre : '' }}">
                    </div>

                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="paternoInmediato">Apellido paterno del jefe inmediato:</label>
                        <input type="text" name="paternoInmediato" id="paternoInmediato" class="form-control text-center"
                            placeholder="Ingrese el apellido paterno del jefe inmediato" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->jefeInmediatos->JEI_apellidoPaterno : '' }}">
                    </div>

                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="maternoInmediato">Apellido materno del jefe inmediato:</label>
                        <input type="text" name="maternoInmediato" id="maternoInmediato" class="form-control text-center"
                            placeholder="Ingrese el apellido materno del jefe inmediato" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->jefeInmediatos->JEI_apellidoMaterno : '' }}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="cargoJefeInmediato">Cargo del jefe inmediato:</label>
                        <input type="text" name="cargoJefeInmediato" id="cargoJefeInmediato" class="form-control text-center"
                            placeholder="Ingrese el cargo del jefe inmediato" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->jefeInmediatos->JEI_cargo : '' }}">
                    </div>
                    <div class="col-12">
                        <p class="text-left">Esperando contar con su apoyo para poder cumplir con tan importante requisito, en
                            beneficio de la
                            sociedad,
                            asi como de mi formacion profesional.</p>
                        <p class="font-weight-bold text-center">Atentamente</p>
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="nombreAlumno">Nombre del Alumno:</label>
                        <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$estudiante->EST_nombre}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="apellidoPaternoAlumno">Apellido paterno:</label>
                        <input type="text" name="apellidoPaternoAlumno" id="apellidoPaternoAlumno"
                            class="form-control text-center" placeholder="Ingrese su apellido paterno" value="{{$estudiante->EST_apellidoPaterno}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="apellidoMaternoAlumno">Apellido materno:</label>
                        <input type="text" name="apellidoMaternoAlumno" id="apellidoMaternoAlumno"
                            class="form-control text-center" placeholder="Ingrese su apellido materno" value="{{$estudiante->EST_apellidoMaterno}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="carreraAlumno">Carrera:</label>
                        <select name="carreraAlumno" id="carreraAlumno" class="form-control text-center">
                            <option value="{{$estudiante->EST_carrera}}"> Seleccionar</option>
                            <option value="Contador Publico">Contador Publico</option>
                        <option value="Ingenieria Informatica">Ingenieria Informatica</option>
                        <option value="Ingenieria Civil">Ingenieria Civil</option>
                        <option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
                        <option value="Ingenieria en Energias Renovables">Ingenieria en Energias Renovables</option>
                        <option value="Ingenieria Quimica">Ingenieria Quimica</option>
                        </select>
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="grupoAlumno">Grupo:</label>
                        <input type="number" name="grupoAlumno" id="grupoAlumno" class="form-control text-center"
                            placeholder="Ingrese su grupo" value="{{$estudiante->EST_grupo}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="cuentaAlumno">Numero de cuenta:</label>
                        <input type="number" name="cuentaAlumno" id="cuentaAlumno" class="form-control text-center"
                            placeholder="Ingrese su numero de cuenta" value="{{$estudiante->EST_numeroCuenta}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="creditosAlumno">Total de creditos:</label>
                        <input type="number" name="creditosAlumno" id="creditosAlumno" class="form-control text-center"
                            placeholder="Porcentaje de creditos, sin el simbolo %" value="{{$estudiante->EST_porcentajeCreditos}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="correoAlumno">Correo electronico:</label>
                        <input type="email" name="correoAlumno" id="correoAlumno" class="form-control text-center"
                            placeholder="Ingrese su correo electronico" value="{{$estudiante->EST_correo}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="telefonoAlumno">Telefono:</label>
                        <input type="tel" name="telefonoAlumno" id="telefonoAlumno" class="form-control text-center"
                            placeholder="Ingrese su numero de telefono" value="{{$estudiante->EST_telefono}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="domicilioAlumno">Domicilio:</label>
                        <input type="text" name="domicilioAlumno" id="domicilioAlumno" class="form-control text-center"
                            placeholder="Ingrese su domicilio" value="{{$estudiante->EST_domicilio}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="edadAlumno">Edad:</label>
                        <input type="number" name="edadAlumno" id="edadAlumno" class="form-control text-center"
                            placeholder="Ingrese su edad" value="{{$estudiante->EST_edad}}">
                    </div>
    
                    <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="carreraAlumno">Semestre:</label>
                        <select name="semestreAlumno" id="semestreAlumno" class="form-control text-center">
                            <option value="{{$estudiante->EST_semestre}}">Seleccionar</option>
                            <option value="5° Semestre">5° Semestre</option>
                            <option value="6° Semestre">6° Semestre</option>
                            <option value="7° Semestre">7° Semestre</option>
                            <option value="8° Semestre">8° Semestre</option>
                            <option value="9° Semestre">9° Semestre</option>
                            <option value="10° Semestre">10° Semestre</option>
                        </select>
                    </div>
    
                    <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                            <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg ml-1">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

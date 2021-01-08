@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud Registro - Autorización
    </h2>
@stop


@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{route('registroAutorizacion.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="frmRegistroAutorizacion">
                @csrf
                @method('PUT')

                <div class="col-12 text-center">
                    <h4 class="m-0 text-dark">Datos del Prestador</h4>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="fechaDependencia">Fecha de entrega del documento:</label>
                    <input type="date" name="fechaDependencia" id="fechaDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaEntrega : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nRegistroSocialAlumno">No. registro estatal de SS:</label>
                    <input type="text" name="nRegistroSocialAlumno" id="nRegistroServicioSocialAlumno"
                        class="form-control text-center" placeholder="Ingrese su numero estatal de registro social">
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

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nombreAlumno">Nombre del Alumno:</label>
                    <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control text-center"
                        placeholder="Ingrese su nombre" value="{{$estudiante->EST_nombre}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="correoAlumno">Correo electronico:</label>
                    <input type="email" name="correoAlumno" id="correoAlumno" class="form-control text-center"
                        placeholder="Ingrese su correo electronico" value="{{$estudiante->EST_correo}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="carreraAlumno">Carrera:</label>
                    <select name="carreraAlumno" id="carreraAlumno" class="form-control text-center">
                        <option value="{{$estudiante->EST_carrera}}">Seleccionar</option>
                        <option value="Contador Publico">Contador Publico</option>
                        <option value="Ingenieria Informatica">Ingenieria Informatica</option>
                        <option value="Ingenieria Civil">Ingenieria Civil</option>
                        <option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
                        <option value="Ingenieria en Energias Renovables">Ingenieria en Energias Renovables</option>
                        <option value="Ingenieria Quimica">Ingenieria Quimica</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="edadAlumno">Edad:</label>
                    <input type="number" name="edadAlumno" id="edadAlumno" class="form-control text-center"
                        placeholder="Ingrese su edad" value="{{$estudiante->EST_edad}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="sexoAlumno">Sexo:</label>
                    <select name="sexoAlumno" id="sexoAlumno" class="form-control text-center">
                        <option value="{{$estudiante->EST_sexo}}">Seleccionar</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="creditosAlumno">Total de creditos:</label>
                    <input type="number" name="creditosAlumno" id="creditosAlumno" class="form-control text-center"
                        placeholder="Ingrese su numero de cuenta" value="{{$estudiante->EST_porcentajeCreditos}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="promedioAlumno">Promedio:</label>
                    <input type="number" name="promedioAlumno" id="promedioAlumno" class="form-control text-center"
                        placeholder="Ingrese su promedio" value="{{$estudiante->EST_promedio}}">
                </div>

                <div class="col-12 text-center">
                    <h4 class="m-0 text-dark">Datos de la entidad receptora</h4>
                    <p class="m-0 text-dark text-center">Informacion de la empresa o institucion</p>
                    <br>
                </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="nombreDependencia">Nombre de la entidad receptora:</label>
                    <input type="text" name="nombreDependencia" id="nombreDependencia" class="form-control text-center"
                        placeholder="Nombre de la institucion o empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_nombre : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="tipoDependencia">Opcion:</label>
                    <select name="tipoDependencia" id="tipoDependencia" class="form-control text-center">
                        <option value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_tipoEntidad : '' }}">Seleccionar..</option>
                        <option value="Federal">Federal</option>
                        <option value="Estatal">Estatal</option>
                        <option value="Municipal">Municipal</option>
                        <option value="O.N.G">O.N.G</option>
                        <option value="I.E">I.E</option>
                        <option value="I.P">I.P.</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="areaServicioSocial">Unidad administrativa responsable:</label>
                    <input type="text" name="areaServicioSocial" id="areaServicioSocial"
                        class="form-control text-center" placeholder="Nombre del area responsable" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombre : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="calleDependencia">Calle:</label>
                    <input type="text" name="calleDependencia" id="calleDependencia" class="form-control text-center"
                        placeholder="Calle de la institucion" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_calle : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="domicilioDependencia">Domicilio:</label>
                    <input type="text" name="domicilioDependencia" id="domicilioDependencia" class="form-control text-center"
                        placeholder="Domicilio de la institucion" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_domicilio : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="municipioDependencia">Municipio:</label>
                    <input type="text" name="municipioDependencia" id="municipioDependencia" class="form-control text-center"
                        placeholder="Municipio de la institucion" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_municipio : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="codigoPostalDependencia">Codigo Postal:</label>
                    <input type="number" name="codigoPostalDependencia" id="codigoPostalDependencia" class="form-control text-center"
                        placeholder="Ingrese su codigo postal" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="telefonoDependencia">Telefono:</label>
                    <input type="number" name="telefonoDependencia" id="telefonoDependencia" class="form-control text-center"
                        placeholder="Ingrese su numero de telefono" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_telefono : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="responsableDependencia">Nombre del responsable de SS:</label>
                    <input type="text" name="responsableDependencia" id="responsableDependencia" class="form-control text-center"
                        placeholder="Nombre de la persona receptora encargada" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombreResponsable : '' }}">
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
                    <label for="cargoResponsable">Cargo:</label>
                    <input type="text" name="cargoResponsable" id="cargoResponsable" class="form-control text-center"
                        placeholder="Cargo o puesto de tu receptor" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_cargo : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="programaDependencia">Programa en el que participara el prestador:</label>
                    <select name="programaDependencia" id="programaDependencia" class="form-control text-center">
                        <option value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_programaParticipa : '' }}">Seleccionar..</option>
                        <option value="Salud">Salud</option>
                        <option value="Educacion, arte, cultura y deporte">Educacion, arte, cultura y deporte</option>
                        <option value="Alimentacion y nutricion">Alimentacion y nutricion</option>
                        <option value="Vivienda">Vivienda</option>
                        <option value="Empleo y capacitacion para el trabajo">Empleo y capacitacion para el trabajo</option>
                        <option value="Apoyo a proyectos productivos">Apoyo a proyectos productivos</option>
                        <option value="Falta agregar mas datos">Falta agregar mas datos</option>
                    </select>
                </div>



                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="actividadesDependencia">Actividades:</label>
                    <input type="text" name="actividadesDependencia" id="actividadesDependencia" class="form-control text-center"
                        placeholder="Ingresa 4 actividades, seguido de una coma" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_actividades : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="horarioDependencia">En que horario:</label>
                    <select name="horarioDependencia" id="horarioDependencia" class="form-control text-center">
                        <option value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_horario : '' }}">Seleccionar..</option>
                        <option value="Lunes a Viernes">Lunes a Viernes</option>
                        <option value="Sabados, domingos y dias festivos">Sabados, domingos y dias festivos</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="entradaDependencia">De (Ingresa hora de entrada):</label>
                    <input type="time" name="entradaDependencia" id="entradaDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="salidaDependencia">A (Ingresa hora de salida):</label>
                    <input type="time" name="salidaDependencia" id="salidaDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="inicioDependencia">Periodo de presentacion, del:</label>
                    <input type="date" name="inicioDependencia" id="inicioDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="terminoDependencia">Al:</label>
                    <input type="date" name="terminoDependencia" id="terminoDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="horasDependencia">Total de horas a acumular:</label>
                    <input type="number" name="horasDependencia" id="horasDependencia" class="form-control text-center"
                        placeholder="Ingresa total de horas" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_totalHoras : '' }}">
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

@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Solicitud para empresas de sector privado para una persona
    </h2>
@stop

@section('content')
<form action="{{route('solicitudPrivado1.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="solicitudPrivado1">
    @csrf
                    @method('PUT')
<div class="form-group col-xs-12 col-sm-8 col-md-4 col-lg-5 col-xl-5">
    <label for="municipioDependencia">Lugar:</label>
    <input type="text" name="municipioDependencia" id="municipioDependencia" class="form-control text-center"
        placeholder="Ingrese el nombre del municipio" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_municipio : '' }}">
</div>

<div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 ">
    <label for="municipioDependencia">Fecha:</label>
    <input type="text" name="municipioDependencia" id="municipioDependencia" class="form-control text-center"
        placeholder="Ingrese el nombre del municipio">
    <br>
</div>

<div class="contenedor-solicitud d-flex w-100 justify-content-between flex-wrap ml-2 text-left">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 text-left">
    <h5 class="text-uppercase font-weight-bold">Lic. Veronica Sanchez Guadarrama</h5>
    <h5 class="text-uppercase font-weight-bold">Titular de la unidad de servicio social</h5>
    <h5 class="text-uppercase font-weight-bold">P r e s e n t e</h5>
</div>
    <div class="w-100">
        <br><br>
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">El que suscribe,</p>
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="responsableDependencia" id="responsableDependencia" class="form-control text-center"
            placeholder="Ingrese el nombre del responsable de SS en la empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombreResponsable : '' }}">
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="apellidoPaternoResponsable" id="apellidoPaternoResponsable" class="form-control text-center"
            placeholder="Ingrese el apellido paterno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno : '' }}">
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="apellidoMaternoResponsable" id="apellidoMaternoResponsable" class="form-control text-center"
            placeholder="Ingrese el apellido materno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno : '' }}">
    </div>
    <div class="mr-1 mb-3">
        <p class="m-0 mt-2">
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="cargoResponsable" id="cargoResponsable" class="form-control text-center"
            placeholder="Ingrese el nombre del cargo" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_cargo : '' }}">
    </div>
    <div class="mr-1 mb-3">
        <p class="m-0 mt-2">, de la empresa</p>
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="nombreDependencia" id="nombreDependencia" class="form-control text-center"
            placeholder="Ingrese el nombre de la empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_nombre : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">,</p>
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="calleDependencia" id="calleDependencia" class="form-control text-center"
            placeholder="Ingrese la calle de la empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_calle : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">,</p>
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="codigoPostalDependencia" id="codigoPostalDependencia" class="form-control text-center"
            placeholder="Ingrese el C.P de ubicación" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">,</p>
    </div>
    <div class="mr-1 mb-3 flex-grow-1">
        <input type="text" name="municipioDependencia" id="municipioDependencia" class="form-control text-center"
            placeholder="Ingrese el municipio de la empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_municipio : '' }}">
    </div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">.</p>
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Por medio de este conducto me dirigo a usted de la manera mas atenta para solicitar al
            C.</p>
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
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2"> estudiante de la carrera de</p>
    </div>
    <div class="mr-2 mb-3 flex-grow-1">
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
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">con el numero de cuenta</p>
    </div>
    <div class="mr-2 mb-3 flex-grow-1"><input type="number" name="cuentaAlumno" id="cuentaAlumno"
            class="form-control text-center" placeholder="Ingrese su numero de cuenta" value="{{$estudiante->EST_numeroCuenta}}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">;</p>
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2"> del Tecnologico de Estudios Superiores de San Felipe del Progreso, para que realice su
            Servicio social en la empresa a mi cargo, en el área de </p>
    </div>
    
    <div class="mr-2 mb-3 flex-grow-1">
        <input type="text" name="areaServicioSocial" id="areaServicioSocial" class="form-control text-center"
            placeholder="Ingrese el nombre del area" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombre : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">en el horario de</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="time" name="entradaDependencia" id="entradaDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada : '' }}">
    </div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">a</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="time" name="salidaDependencia" id="salidaDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida : '' }}">
    </div>
    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">, de</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="text" name="horarioDependencia" id="horarioDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_horario : '' }}">
    </div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">a partir de</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="date" name="inicioDependencia" id="inicioDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio : '' }}">
    </div>

    <div class="mr-2 mb-3 ">
        <p class="m-0 mt-2">y hasta el</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="date" name="terminoDependencia" id="terminoDependencia" class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino : '' }}">
    </div>
    <div class="w-100">
        <br><br><br>
    </div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Asi mismo hago de su conocimiento que el estudiante recibira un apoyo economico de $</p>
    </div>

    <div class="mr-2 mb-3 flex-grow-1">
        <input type="number" name="estimuloDependencia" id="estimuloDependencia" class="form-control text-center"
            placeholder="Ingrese la cantidad del estimulo" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_estimulo : '' }}">
    </div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">(semanales, quincenales o mensuales) ya que sera de gran apoyo para el desarroolo de sus
            actividades.</p>
    </div>

    <div class="w-100"></div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Cabe mencionar quepor el moento la empresa no cuenta con sello</p>
    </div>

    <div class="w-100"></div>

    <div class="mr-2 mb-3">
        <p class="m-0 mt-2">Sin mas por el momento, reciba un cordial saludo</p>
    </div>

    <div class="w-100"></div>

    <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
        <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg ml-1">
</div>
</form>
@stop

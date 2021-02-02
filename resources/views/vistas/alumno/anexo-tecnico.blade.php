@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Anexo tecnico de autorizacion para el sector social privado
    </h2>
@stop


@section('content')
    <div class="row">
        <form action="{{route('anexoTecnico.update', ['estudiante'=>$estudiante->id])}}" method="post" class="row text-center" id="frmAnexoTecnico">
            @csrf
                @method('PUT')

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="inicioDependencia">Fecha de inicio:</label>
                    <input type="date" name="inicioDependencia" id="inicioDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="terminoDependencia">Fecha de termino:</label>
                    <input type="date" name="terminoDependencia" id="terminoDependencia"
                        class="form-control text-center" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino : '' }}">
                </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                <label for="nombreDependencia">Dependencia ejecutora:</label>
                <input type="text" name="nombreDependencia" id="nombreDependencia" class="form-control text-center"
                    placeholder="Nombre de la institucion o empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_nombre : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="areaServicioSocial">Unidad responsable:</label>
                <input type="text" name="areaServicioSocial" id="areaServicioSocial"
                    class="form-control text-center" placeholder="Nombre del area responsable" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombre : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-8 col-lg-4 col-xl-4">
                <label for="responsableDependencia">Receptor de prestadores:</label>
                <input type="text" name="responsableDependencia" id="responsableDependencia" class="form-control text-center"
                    placeholder="Nombre de la persona receptora encargada" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_nombreResponsable : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoPaternoResponsable">Apellido paterno del receptor:</label>
                    <input type="text" name="apellidoPaternoResponsable" id="apellidoPaternoResponsable"
                        class="form-control text-center" placeholder="Ingrese su apellido paterno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno : '' }}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoMaternoResponsable">Apellido materno del receptor:</label>
                    <input type="text" name="apellidoMaternoResponsable" id="apellidoMaternoResponsable"
                        class="form-control text-center" placeholder="Ingrese su apellido materno" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno : '' }}">
                </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="cargoResponsable">Cargo:</label>
                <input type="text" name="cargoResponsable" id="cargoResponsable" class="form-control text-center"
                    placeholder="Cargo o puesto de tu receptor" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->area->ARA_cargo : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-8 col-lg-4 col-xl-4">
                <label for="calleDependencia">Calle:</label>
                <input type="text" name="calleDependencia" id="calleDependencia" class="form-control text-center"
                    placeholder="Calle de la empresa"value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_calle : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="municipioDependencia">Municipio:</label>
                <input type="text" name="municipioDependencia" id="municipioDependencia" class="form-control text-center"
                    placeholder="Municipio de la institucion" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_municipio : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
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
                <label for="correoDependencia">Correo electronico:</label>
                <input type="email" name="correoDependencia" id="correoDependencia" class="form-control text-center"
                    placeholder="Ingrese el correo de la empresa" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_correo : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="estimuloDependencia">Estimulo economico:</label>
                <input type="text" name="estimuloDependencia" id="estimuloDependencia"
                    class="form-control text-center" placeholder="Ingrese la cantidad del estimulo" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_estimulo : '' }}">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <label for="carreraAlumno">Perfil profesional:</label>
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

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="actividadesDependencia">Actividades:</label>
                    <input type="text" name="actividadesDependencia" id="actividadesDependencia" class="form-control text-center"
                        placeholder="Ingresa 4 actividades, seguido de una coma" value="{{ isset($estudiante->seguimiento->entidades) ? $estudiante->seguimiento->entidades->entidad->ENR_actividades : '' }}">
                </div>

            <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                    <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg">
                    <a href="{{ route('anexoTecnico.imprimir', ['estudiante'=>$estudiante]) }}" target="_blank" class="btn btn-info btn-block">Imprimir</a>
                </div>
            </div>
        </form>
    </div>
@stop

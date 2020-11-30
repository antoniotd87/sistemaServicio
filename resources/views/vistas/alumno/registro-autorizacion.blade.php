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
            <form action="" class="row text-center" id="frmRegistroAutorizacion">

                <div class="col-12 text-center">
                    <h4 class="m-0 text-dark">Datos del Prestador</h4>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nRegistroSocialAlumno">No. registro estatal de SS:</label>
                    <input type="text" name="nRegistroSocialAlumno" id="nRegistroServicioSocialAlumno"
                        class="form-control text-center" placeholder="Ingrese su numero estatal de registro social">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoPaternoAlumno">Apellido paterno:</label>
                    <input type="text" name="apellidoPaternoAlumno" id="apellidoPaternoAlumno"
                        class="form-control text-center" placeholder="Ingrese su apellido paterno">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoMaternoAlumno">Apellido materno:</label>
                    <input type="text" name="apellidoMaternoAlumno" id="apellidoMaternoAlumno"
                        class="form-control text-center" placeholder="Ingrese su apellido materno">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="nombreAlumno">Nombre del Alumno:</label>
                    <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control text-center"
                        placeholder="Ingrese su nombre">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="correoAlumno">Correo electronico:</label>
                    <input type="email" name="correoAlumno" id="correoAlumno" class="form-control text-center"
                        placeholder="Ingrese su correo electronico">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="carreraAlumno">Carrera:</label>
                    <select name="carreraAlumno" id="carreraAlumno" class="form-control text-center">
                        <option value="">Seleccionar</option>
                        <option value="5">Contador Publico</option>
                        <option value="6">Informatica</option>
                        <option value="7">Civil</option>
                        <option value="8">Industrias Alimentarias</option>
                        <option value="9">Energias Renovables</option>
                        <option value="10">Quimica</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="edadAlumno">Edad:</label>
                    <input type="number" name="edadAlumno" id="edadAlumno" class="form-control text-center"
                        placeholder="Ingrese su edad">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="sexoAlumno">Sexo:</label>
                    <select name="sexoAlumno" id="sexoAlumno" class="form-control text-center">
                        <option value="">Seleccionar</option>
                        <option value="m">Masculino</option>
                        <option value="s">Femenino</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="cuentaAlumno">Total de creditos:</label>
                    <input type="number" name="cuentaAlumno" id="cuentaAlumno" class="form-control text-center"
                        placeholder="Ingrese su numero de cuenta">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="promedioAlumno">Promedio:</label>
                    <input type="number" name="promedioAlumno" id="promedioAlumno" class="form-control text-center"
                        placeholder="Ingrese su promedio">
                </div>

                <div class="col-12 text-center">
                    <h4 class="m-0 text-dark">Datos de la entidad receptora</h4>
                    <p class="m-0 text-dark text-center">Informacion de la empresa o institucion</p>
                    <br>
                </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="nombreEntidad">Nombre de la entidad receptora:</label>
                    <input type="text" name="nombreEntidad" id="nombreEntidad" class="form-control text-center"
                        placeholder="Nombre de la institucion o empresa">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="tipoEntidad">Opcion:</label>
                    <select name="tipoEntidad" id="tipoEntidad" class="form-control text-center">
                        <option value="">Seleccionar..</option>
                        <option value="5">Federal</option>
                        <option value="6">Estatal</option>
                        <option value="7">Municipal</option>
                        <option value="8">O N G</option>
                        <option value="9">I.E.</option>
                        <option value="10">I.P.</option>
                    </select>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="unidadResponsableEntidad">Unidad administrativa responsable:</label>
                    <input type="text" name="unidadResponsableEntidad" id="unidadResponsableEntidad"
                        class="form-control text-center" placeholder="Nombre del area responsable">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="domicilioEntidad">Domicilio:</label>
                    <input type="text" name="domicilioEntidad" id="domicilioEntidad" class="form-control text-center"
                        placeholder="Domicilio de la institucion">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="municipioEntidad">Municipio:</label>
                    <input type="text" name="municipioEntidad" id="municipioEntidad" class="form-control text-center"
                        placeholder="Municipio de la institucion">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="telefonoEntidad">Telefono:</label>
                    <input type="number" name="telefonoEntidad" id="telefonoEntidad" class="form-control text-center"
                        placeholder="Ingrese su numero de telefono">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="responsableEntidad">Nombre del responsable de SS:</label>
                    <input type="text" name="responsableEntidad" id="responsableEntidad" class="form-control text-center"
                        placeholder="Nombre de la persona receptora encargada">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoPaternoEntidad">Apellido paterno del responsable de SS:</label>
                    <input type="text" name="apellidoPaternoEntidad" id="apellidoPaternoEntidad"
                        class="form-control text-center" placeholder="Ingrese su apellido paterno">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="apellidoMaternoEntidad">Apellido materno del responsable de SS:</label>
                    <input type="text" name="apellidoMaternoEntidad" id="apellidoMaternoEntidad"
                        class="form-control text-center" placeholder="Ingrese su apellido materno">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="cargoEntidad">Cargo:</label>
                    <input type="text" name="cargoEntidad" id="cargoEntidad" class="form-control text-center"
                        placeholder="Cargo o puesto de tu receptor">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                    <label for="tipoEntidad">Programa en el que participara el prestador:</label>
                    <select name="tipoEntidad" id="tipoEntidad" class="form-control text-center">
                        <option value="">Seleccionar..</option>
                        <option value="5">Salud</option>
                        <option value="6">Educacion, arte, cultura y deporte</option>
                        <option value="7">Alimentacion y nutricion</option>
                        <option value="8">Vivienda</option>
                        <option value="9">Empleo y capacitacion para el trabajo</option>
                        <option value="10">Apoyo a proyectos productivos</option>
                        <option value="10">Falta agregar mas datos</option>
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

@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Anexo tecnico de autorizacion para el sector social privado
    </h2>
@stop


@section('content')
    <div class="row">
        <form action="" class="row text-center" id="frmAnexoTecnico">
            <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-4">
                <label for="nombreEntidad">Dependencia ejecutora:</label>
                <input type="text" name="nombreEntidad" id="nombreEntidad" class="form-control text-center"
                    placeholder="Nombre de la institucion o empresa">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="unidadResponsableEntidad">Unidad responsable:</label>
                <input type="text" name="unidadResponsableEntidad" id="unidadResponsableEntidad"
                    class="form-control text-center" placeholder="Nombre del area responsable">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-8 col-lg-4 col-xl-4">
                <label for="responsableEntidad">Receptor de prestadores:</label>
                <input type="text" name="responsableEntidad" id="responsableEntidad" class="form-control text-center"
                    placeholder="Nombre de la persona receptora encargada">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="cargoEntidad">Cargo:</label>
                <input type="text" name="cargoEntidad" id="cargoEntidad" class="form-control text-center"
                    placeholder="Cargo o puesto de tu receptor">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-8 col-lg-4 col-xl-4">
                <label for="calleEntidad">Calle:</label>
                <input type="text" name="calleEntidad" id="calleEntidad" class="form-control text-center"
                    placeholder="Calle de la empresa">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="municipioEntidad">Municipio:</label>
                <input type="text" name="municipioEntidad" id="municipioEntidad" class="form-control text-center"
                    placeholder="Municipio de la institucion">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="codigoPostalEntidad">Codigo Postal:</label>
                <input type="number" name="codigoPostalEntidad" id="codigoPostalEntidad" class="form-control text-center"
                    placeholder="Ingrese su codigo postal">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="telefonoEntidad">Telefono:</label>
                <input type="number" name="telefonoEntidad" id="telefonoEntidad" class="form-control text-center"
                    placeholder="Ingrese su numero de telefono">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="correoEntidad">Correo electronico:</label>
                <input type="email" name="correoEntidad" id="correoEntidad" class="form-control text-center"
                    placeholder="Ingrese el correo de la empresa">
            </div>

            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="estimuloEntidad">Estimulo economico:</label>
                <input type="text" name="estimuloEntidad" id="estimuloEntidad"
                    class="form-control text-center" placeholder="Ingrese la cantidad del estimulo">
            </div>

            <div class="col-12 row d-flex justify-content-center pr-0 mt-3">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                    <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-lg ml-1">
                </div>
            </div>
        </form>
    </div>
    <h2>Faltan datos</h2>
@stop
@section('content')
    <div class="row mx-5 justify-content-center">
        <div class="col-4">
            <p class="font-weight-bold mb-0">Numero de cuenta:</p>
            <p>{{ $estudiante->EST_numeroCuenta }}</p>
            <p class="font-weight-bold mb-0">Registro estatal de Servicio social:</p>
            <p>{{ $estudiante->EST_registroEstatalSS }}</p>
            <p class="font-weight-bold mb-0">Apellido Paterno:</p>
            <p>{{ $estudiante->EST_apellidoPaterno }}</p>
            <p class="font-weight-bold mb-0">Apellido Materno:</p>
            <p>{{ $estudiante->EST_apellidoMaterno }}</p>
            <p class="font-weight-bold mb-0">Nombre:</p>
            <p>{{ $estudiante->EST_nombre }}</p>
            <p class="font-weight-bold mb-0">Correo:</p>
            <p>{{ $estudiante->EST_correo }}</p>
            <p class="font-weight-bold mb-0">Edad:</p>
            <p>{{ $estudiante->EST_edad }}</p>
            <p class="font-weight-bold mb-0">Sexo:</p>
            <p>{{ $estudiante->EST_sexo }}</p>
            <p class="font-weight-bold mb-0">Carrera:</p>
            <p>{{ $estudiante->EST_carrera }}</p>
        </div>
        <div class="col-4">
            <P class="font-weight-bold mb-0">Promedio:</P>
            <p>{{ $estudiante->EST_promedio }}</p>
            <p class="font-weight-bold mb-0">Porcentaje de creditos:</p>
            <p>{{ $estudiante->EST_porcentajeCreditos }}</p>
            <p class="font-weight-bold mb-0">Fecha de nacimineto:</p>
            <p>{{ $estudiante->EST_fechaNacimiento }}</p>
            <p class="font-weight-bold mb-0">Domicilio:</p>
            <p>{{ $estudiante->EST_domicilio }}</p>
            <p class="font-weight-bold mb-0">RFC:</p>
            <p>{{ $estudiante->EST_rfc }}</p>
            <p class="font-weight-bold mb-0">CURP:</p>
            <p>{{ $estudiante->EST_curp }}</p>
            <p class="font-weight-bold mb-0">Telefono:</p>
            <p>{{ $estudiante->EST_telefono }}</p>
            <p class="font-weight-bold mb-0">Codigo Postal:</p>
            <p>{{ $estudiante->EST_codigoPostal }}</p>
        </div>
    </div>
@stop

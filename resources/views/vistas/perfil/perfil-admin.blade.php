@section('content')
<div class="row mx-5 justify-content-center">
    <div class="col-8">
        <p class="font-weight-bold mb-0">Numero de servidor publico:</p>
        <p>{{ $administrador->UA_numeroSP }}</p>
        <p class="font-weight-bold mb-0">Nombre:</p>
        <p>{{ $administrador->UA_nombre }}</p>
        <p class="font-weight-bold mb-0">Apellido Paterno:</p>
        <p>{{ $administrador->UA_apellidoPaterno }}</p>
        <p class="font-weight-bold mb-0">Apellido Materno:</p>
        <p>{{ $administrador->UA_apellidoMaterno }}</p>
        <p class="font-weight-bold mb-0">Correo electronico:</p>
        <p>{{ $administrador->UA_correo }}</p>
        <p class="font-weight-bold mb-0">Rol:</p>
        <p>{{ $administrador->UA_rol }}</p>
        <p class="font-weight-bold mb-0">Cargo:</p>
        <p>{{ $administrador->UA_cargo }}</p>
        <p class="font-weight-bold mb-0">Fecha de contratacion:</p>
        <p>{{ $administrador->UA_fechaContratacion }}</p>
    </div>
</div>
@stop
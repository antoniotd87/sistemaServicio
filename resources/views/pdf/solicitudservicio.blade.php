@extends('pdf.layout')

@section('content')
    <h3 class="titulo salto centro">SOLICITUD PARA TRAMITAR EL SERVICIO SOCIAL</h3>
    <p class="izquierda salto">San Felipe del Progreso, Méx. A {{$fecha}}</p>
    <h4 class="subtitulo">C.P. ANGÉLICA GONZÁLEZ VELÁZQUEZ</h4>
    <h4 class="subtitulo">ENCARGADA DEL DEPARTAMENTO DE SERVICIO SOCIAL Y RESIDENCIA PROFESIONAL</h4>
    <div class="subtitulo salto">PRESENTE</div>
    <p class="salto">Por medio de la presente me dirijo a usted de la manera más atenta para solicitar se me autorice
        realizar mi Servicio Social en: </p>
    <p class="interlineado">Municipio de ubicación de la Dependencia: 
        <span class="subrayado">{{$municipio}}</span></p>
    <p class="interlineado">Dependencia o Institución: 
        <span class="subrayado">{{$dependencia}}</span></p>
    <p class="interlineado">Director o responsable del Servicio Social en la Dependencia: 
        <span class="subrayado">{{$responsable}}</span></p>
    <p class="interlineado">Cargo: 
        <span class="subrayado">{{$cargo}}</span></p>
    <p class="interlineado">Área en que se realizará el Servicio Social: 
        <span class="subrayado">{{$area}}</span></p>
    <p class="salto">Nombre y cargo del responsable del Área: 
        <span class="subrayado">{{$jefe}}</span></p>
    <p class="salto">Esperando contar con su apoyo para poder cumplir con tan importante requisito, en beneficio de la
        sociedad, así como de mi formación profesional.</p>
    <div class="subtitulo salto centro">ATENTAMENTE</div>
    <P class="interlineado">ESTUDIANTE: 
        <span class="subrayado">{{$estudiante}}</span> </p>
    <P class="interlineado">CARRERA Y GRUPO: 
        <span class="subrayado">{{$carrera}}</span> </p>
    <P class="interlineado">NÚMERO DE CUENTA: 
        <span class="subrayado">{{$cuenta}}</span> </p>
    <P class="interlineado">TOTAL DE CRÉDITOS: 
        <span class="subrayado">{{$creditos}}</span> </p>
    <P class="interlineado">CORREO ELECTRÓNICO: 
        <span class="subrayado">{{$correo}}</span> </p>
    <P class="interlineado">NÚM. DE TELEFONO: 
        <span class="subrayado">{{$telefono}}</span> </p>
    <P class="interlineado">DOMICILIO: 
        <span class="subrayado">{{$domicilio}}</span> </p>
    <P class="interlineado">EDAD: 
        <span class="subrayado">{{$edad}}</span> </p>
    <P class="salto">SEMESTRE: 
        <span class="subrayado">{{$semestre}}° Semestre</span> </p>
        <p class="izquierda salto">Vo. Bo. Jefe de Division</p>
        <p class="izquierda subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
@endsection

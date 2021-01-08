@extends('pdf.layout')

@section('content')
    <h3 class="titulo salto centro">DATOS DEL PRESTADOR</h3>
    
    <button style="background-color: white; height: 90px; width: 70px; margin-left: 500px;">Foto</button>

    <p class="salto">NOMBRE DEL ESTUDIANTE: 
        <span class="subrayado">{{$estudiante}}</span></p>

    <p class="salto">FECHA DE NACIMIENTO: 
        <span class="subrayado">{{$fechanacimiento}}</span></p>

    <p class="salto">EDAD: 
        <span class="subrayado">{{$edad}} años</span></p>

    <p class="salto">DOMICILIO: 
        <span class="subrayado">{{$domicilio}}</span></p>

    <p class="salto">R.F.C: 
        <span class="subrayado">{{$rfc}}</span></p>

    <p class="salto">CURP: 
        <span class="subrayado">{{$curp}}</span></p>

    <P class="salto">CELULAR: 
        <span class="subrayado">{{$telefono}}</span> </p>

    <P class="salto">C.P: 
        <span class="subrayado">{{$codigopostal}}</span> </p>

    <P class="salto">PERFIL: 
        <span class="subrayado">{{$carrera}}</span> </p>

    <P class="salto">SEMESTRE: 
        <span class="subrayado">{{$semestre}}</span> </p>
    
    <p class="izquierda salto">San Felipe del Progreso, Méx. A {{$fecha}}</p>

        <p class="centro subrayado linea salto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

        <p class="centro salto">FIRMA DEL PRESTADOR</p>
@endsection

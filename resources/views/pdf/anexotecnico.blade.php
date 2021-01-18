@extends('pdf.layout')

@section('content')
    <img id="logos" src="img/gobierno.png" align="left">
    <img id="logos" src="img/tessfp.png" align="right">
    <h3 class="titulo salto centro" style="margin-top: 70px;">ANEXO TÉCNICO DE AUTORIZACIÓN PARA EL SECTOR  SOCIAL Y PRIVADO</h3>
    <table id="table" class="saltos">
    <tr>
        <td>Fecha de elaboracion: </td>
        <td>Periodo de ejecucion (Inicio): {{$inicio}}</td>
        <td>Termino: {{$termino}}</td>
    </tr>
</table>
    
    <table id="table" class="saltos">
    <tr bgcolor="green">
        <td class="subtitulo"><font color="white">Dependencia ejecutora</font></td>
        <td class="subtitulo"><font color="white">Unidad responsable</font></td>
    </tr>
</table>
<table width="100%" class="saltos">
    <tr>
    <td style="text-align: center;"><span class="">{{$dependencia}} </span></td>
    <td style="text-align: center;"><span class="">{{$area}} </span></td>
    </tr>
</table>
<h4 class="subtitulo centro" style="background-color: green;"><font color="white">Funcionario receptor de prestadores</font></h4>
<table id="table" class="saltos">
    <tr bgcolor="green">
        <td class="subtitulo"><font color="white">Nombre:</font></td>
        <td class="subtitulo"><font color="white">Cargo:</font></td>
    </tr>
</table>
<table width="100%" class="saltos">
    <tr>
    <td style="text-align: center;"><span class="">{{$responsable}} </span></td>
    <td style="text-align: center;"><span class="">{{$cargo}} </span></td>
    </tr>
</table>
<table id="table" class="saltos">
    <tr bgcolor="green">
        <td class="subtitulo"><font color="white">Direccion:</font></td>
        <td class="subtitulo"><font color="white">Telefono:</font></td>
    </tr>
</table>
<table width="100%" class="saltos">
    <tr>
    <td><span class="">Calle: {{$direccion}} <br> Municipio: {{$municipio}} Codigo Postal: {{$codigopostal}} </span></td>
    <td><span class="">Telefono: {{$telefono}} <br> Correo Electronico: {{$correo}} </span></td>
    </tr>
</table>
<h4 class="saltos">Estimulo economico que va a recibir el prestador de servicio social: $ {{$estimulo}} M/N </h4>

<h4 class="subtitulo centro" style="background-color: green;"><font color="white">Datos del proyecto</font></h4>
<table id="table" class="saltos">
    <tr bgcolor="green">
        <td class="subtitulo"><font color="white">Perfil profesional, desglosado por carrera:</font></td>
        <td class="subtitulo"><font color="white">Actividades a desarrollar:</font></td>
    </tr>
</table>
<table width="100%" class="saltos">
    <tr>
    <td style="text-align: center;"><span class="">{{$carrera}} </span></td>
    <td style="text-align: center;"><span class="">{{$actividades}} </span></td>
    </tr>
</table>

        <p class="centro saltos subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro salto">Responsable del programa de servicio social en la dependencia</p>
@endsection

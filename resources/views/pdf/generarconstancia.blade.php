@extends('pdf.layout')

@section('content')
  @foreach ($users as  $user)
    <img id="logos" src="img/gobierno.png" align="left">
    <img id="logos" src="img/edo.png" align="right">
    <img id="logos" src="img/tessfp.png" align="right">
    <p class="salt centro" style="margin-top: 75px;">Con fundamento en el Capítulo Tercero, Artículo 14, Fracción IX y Capítulo Octavo, Artículo 35 del Reglamento del Servicio Social del Estado de Mexico.</p>
    <p class="salt centro">Se otorga la presente</p>
    <h4 class="subtitulo centro salt">Constancia</h4>
    <p class="salt centro">a</p>
    <p class="salt centro"><span class="subrayado">{{$user->EST_nombre}} {{$user->EST_apellidoMaterno}} {{$user->EST_apellidoPaterno}}</span></p>
    <p class="salt centro">de la carrera de</p>
    <p class="salt centro"><span class="subrayado">{{$user->EST_carrera}}</span></p>
    <p class="salt centro">de la Institución Educativa y C.C.T.</p>
    <p class="salt centro"><span class="subrayado">Tecnologico de Estudios Superiores de San Felipe del Progreso</span></p>
    <p class="salt centro">Por haber prestado su Servicio Social en el Programa</p>
    <p class="salt centro"><span class="subrayado">{{$user->ENR_programaParticipa}}</span></p>
    <p class="salt centro">en</p>
    <p class="salt centro"><span class="subrayado">{{$user->ARA_nombre}}, {{$user->ENR_nombre}} de {{$user->ENR_municipio}}</span></p>
    <p class="salt centro">Durante el periodo del 
    	<span class="subrayado">{{$user->ENR_fechaInicio}}</span>
    al
    <span class="subrayado">{{$user->ENR_fechaTermino}}</span>
    </p>
    <p class="salt centro">Registro Estatal de Servicio Social</p>
    <p class="salt centro">Por los efectos procedentes, se extiende la presente constancia en </p>
    <p class="salto centro"><span class="subrayado">San Felipe del Progreso</span>
    Méx, el 
    <span class="subrayado">{{$fecha}}</span></p>
    <p class="centro salt">Por la Institución Educativa</p>
    <p class="centro subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro">Dra. Claudia Ruíz Bastida</p>
        <p class="centro">Directora</p>
         @endforeach
@endsection

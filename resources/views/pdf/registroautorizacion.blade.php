@extends('pdf.layout')

@section('content')
    <img id="logos" src="img/gobierno.png" align="left">
    <img id="logos" src="img/edo.png" align="right">
    <img id="logos" src="img/tessfp.png" align="right">
    <h3 class="titulo salto centro">REGISTRO/AUTORIZACION</h3>
    <h4 class="subtitulo centro" style="background-color: yellow;">I. DATOS DEL PRESTADOR E INSTITUCIÓN EDUCATIVA</h4>

    <p class="interlineado">1.- Fecha: 
        <span class="subrayado">     {{$fechaentrega}}     </span>
        No. de Registro Estatal de Servicio Social:
    </p>

    <p class="interlineado">2.- Nombre:
        <span class="subrayado">{{$estudiante}}</span>
        Correo electronico:
        <span class="subrayado">{{$correo}}</span>
        Edad:
        <span class="subrayado">{{$edad}}</span>
        Sexo:
        <span class="subrayado">{{$sexo}}</span>
    </p>

    <p class="interlineado">3.- Carrera: 
        <span class="subrayado">{{$carrera}}</span></p>

    <p class="salto">4.- Porcentaje de créditos cubiertos a la fecha:
        <span class="subrayado salto">{{$creditos}} %</span>
        Promedio:
        <span class="subrayado salto">{{$promedio}} %</span>
    </p>

        <h4 class="subtitulo centro" style="background-color: yellow;">II. DATOS DE LA ENTIDAD RECEPTORA</h4>

    <p class="interlineado">5.- Nombre de la Entidad Receptora: 
        <span class="subrayado">{{$dependencia}}</span></p>
        <span class="subrayado">{{$tipo}}</span></p>

    <p class="interlineado">6.- Unidad Administrativa Responsable:
        <span class="subrayado">{{$area}}</span></p>

    <p class="interlineado">7.- Domicilio de la Unidad Administrativa Responsable:
        <span class="subrayado">{{$domicilio}}</span></p>

    <p class="interlineado">8.- Municipio:
        <span class="subrayado">{{$municipio}}</span>
        Teléfono:
        <span class="subrayado">{{$telefono}}</span>
    </p>

    <p class="interlineado">9.- Funcionario responsable del programa y cargo:
        <span class="subrayado">{{$responsable}}</span></p>

    <p class="interlineado">10.- Programa en el que participará el prestador:
        <span class="subrayado">{{$programa}}</span></p>

    <p class="interlineado">11.- Actividades que desarrollará el prestador:
        <span class="subrayado">{{$actividades}}</span>
        En que horario:
        <span class="subrayado">{{$horario}}</span>
        de:
        <span class="subrayado">{{$entrada}} hrs</span>
        a:
        <span class="subrayado">{{$salida}} hrs</span>
    </p>

    <p class="interlineado">12.- Período de Prestación, del: 
        <span class="subrayado">{{$inicio}}</span>
        al:
        <span class="subrayado">{{$termino}}</span>
    </p>

    <p class="interlineado">13.- Hora de duración del programa o proyecto:
        <span class="subrayado">{{$horas}} hrs</span></p>

        <p class="centro subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro salto">Por la entidad receptora</p>
        <p class="centro subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro">Nombre y firma del prestador</p>
@endsection

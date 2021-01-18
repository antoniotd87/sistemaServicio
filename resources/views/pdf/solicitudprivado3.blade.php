 @extends('pdf.layout')

@section('content')
  
    <p class="izquierda salto">{{$municipio}}, Méx. A {{$fecha}}</p>
    <h4 class="subtitulo">LIC. VERÓNICA L. GUADARRAMA MENDEZ</h4>
    <h4 class="subtitulo">TITULAR DE LA UNIDAD DE SERVICIO SOCIAL</h4>
    <div class="subtitulo salto">PRESENTE</div>
    <p class="salto">El que suscribe, 
    	<span class="subrayado">{{$responsable}}</span>
    	de la empresa 
    	<span class="subrayado">{{$dependencia}}</span>
    	. Por medio de este conducto me dirijo a usted de la manera  más atenta para solicitar a los siguientes estudiantes de la carrera
    	<span class="subrayado"> {{$carrera}} </span>
    	del Tecnológico de Estudios Superiores de San Felipe del Progreso, para que realicen su Servicio social en la empresa a mi cargo, en el horario de
    	<span class="subrayado">{{$entrada}} hrs</span>
    	a
    	<span class="subrayado">{{$salida}} hrs</span>
    	de
    	<span class="subrayado">{{$horario}}</span>
    	a partir del
    	<span class="subrayado">{{$inicio}}</span>
    	y hasta el
    	<span class="subrayado">{{$termino}} </span>
        Así mismo se asistirá durante el periodo vacacional cubriendo el mismo horario.
    </p> 
    <table id="table" class="saltos">
    <tr>
        <th style="text-align: center;">Alumnos: </th>
        <th style="text-align: center;">No. de cuentas</th>
        <th style="text-align: center;">Carrera</th>
        <th style="text-align: center;">Area</th>
    </tr>
    <tbody>
    <tr>
        <td style="text-align: center;">{{$estudiante}}</td>
        <td style="text-align: center;">{{$cuenta}}</td>
        <td style="text-align: center;">{{$carrera}}</td>
        <td style="text-align: center;">{{$area}}</td>
    </tr>
    <tr>
        <td style="text-align: center;">{{$estudiante2}}</td>
        <td style="text-align: center;">{{$cuenta2}}</td>
        <td style="text-align: center;">{{$carrera}}</td>
        <td style="text-align: center;">{{$area}}</td>
    </tr>
    <tr>
        <td style="text-align: center;">{{$estudiante3}}</td>
        <td style="text-align: center;">{{$cuenta3}}</td>
        <td style="text-align: center;">{{$carrera}}</td>
        <td style="text-align: center;">{{$area}}</td>
    </tr>
    </tbody>
</table>

    <p class="interlineado salto">Así mismo hago de su conocimiento que el  estudiante recibirá un apoyo económico de: 
        <span class="subrayado">$ {{$estimulo}} MN mensuales</span>
    ya que será de gran apoyo para el desarrollo de sus actividades. (En caso de que sea en especie colocar. (1500.00 MN mensuales en especie correspondientes al servicio de comedor y transporte).</p>
    <p class="interlineado">Cabe mencionar que por el momento la empresa, no cuenta con sello. (En caso de no tener sello).</p>
    <p class="interlineado">Sin más por el momento, reciba un cordial saludo.</p>

		<p class="centro salto">ATENTAMENTE</p>
		<p class="centro subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro salto">{{$responsable}}</p>
@endsection

 @extends('pdf.layout')

@section('content')
  
    <p class="izquierda salto">{{$municipio}}, Méx. A {{$fecha}}</p>
    <h4 class="subtitulo">LIC. VERÓNICA L. GUADARRAMA MENDEZ</h4>
    <h4 class="subtitulo">TITULAR DE LA UNIDAD DE SERVICIO SOCIAL</h4>
    <div class="subtitulo salto">PRESENTE</div>
    <p class="salto">El que suscribe, 
    	<span class="subrayado">{{$responsable}}</span>
    	de la empresa 
    	<span class="subrayado">{{$dependencia}}.</span>
    	Por medio de este conducto me dirijo a usted de la manera  más atenta para solicitar a las C.
    	<span class="subrayado">{{$estudiante}} y {{$estudiante2}},</span>
    	estudiantes de la carrera 
    	<span class="subrayado">{{$carrera}}</span>
    	con números de cuenta 
    	<span class="subrayado">{{$cuenta}} y {{$cuenta2}};</span>
    	 respectivamente, del Tecnológico de Estudios Superiores de San Felipe del Progreso, para que realicen su Servicio social en la empresa a mi cargo, en el área de
    	<span class="subrayado">{{$area}}</span>
    	en el horario de  
    	<span class="subrayado">{{$entrada}} hrs</span>
    	a
    	<span class="subrayado">{{$salida}} hrs</span>
    	de
    	<span class="subrayado">{{$horario}}</span>
    	a partir del
    	<span class="subrayado">{{$inicio}}</span>
    	y hasta el
    	<span class="subrayado">{{$termino}}</span>
    </p> 

    <p class="interlineado">Así mismo hago de su conocimiento que el  estudiante recibirá un apoyo económico de: 
        <span class="subrayado">$ {{$estimulo}} MN mensuales</span>
    ya que será de gran apoyo para el desarrollo de sus actividades. (En caso de que sea en especie colocar. (1500.00 MN mensuales en especie correspondientes al servicio de comedor y transporte).</p>
    <p class="interlineado">Cabe mencionar que por el momento la empresa, no cuenta con sello. (En caso de no tener sello).</p>
    <p class="interlineado">Sin más por el momento, reciba un cordial saludo.</p>

		<p class="centro salto">ATENTAMENTE</p>
		<p class="centro subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro salto">{{$responsable}}</p>
@endsection

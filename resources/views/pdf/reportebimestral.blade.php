 @extends('pdf.layout')

@section('content')
    <img id="logos" src="img/gobierno.png" align="left">
    <img id="logos" src="img/edo.png" align="right">
    <img id="logos" src="img/tessfp.png" align="right">
    <h3 class="titulo salto centro">Formato de Evaluación</h3>
  
    <p class="salto">Nombre del prestador de servicio social: 
    	<span class="subrayado">{{$estudiante}}</span>
    </p>
    <p class="salto">Programa: 
        <span class="subrayado">{{$programa}}</span>
    </p>
    <p class="salto">Periodo de realizacion, del: 
        <span class="subrayado">{{$inicio}}</span>
        al
        <span class="subrayado">{{$final}}</span>
    </p>
    <p class="salto">Indique a qué bimestre corresponde:   Bimestre 
        <span class="subrayado">{{$bimestre}}</span>
    </p>
    	

		<p class="salto">ATENTAMENTE</p>
		<p class="subrayado linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p class="centro salto">{{$responsable}}</p>
@endsection

@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Generar las Constancias de Termino de Servicio Social</h1>
@stop
@section('content')
 <div class="row">
        <div class="col-12">
            
       
        <ul class="nav nav-tabs">
            
        </ul> 
    
            <div id="1" class="contenido-inscripcion d-block">
                        <h3 class="m-0 text-dark text-center">Alumnos Liberados</h3>
                        <br>
                        <div class="d-flex justify-content-center">

                            <table class="table table-responsive w-100" id="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" style="text-align: center;">ID</th>
                                        <th scope="col" style="text-align: center;">No. de Cuenta</th>
                                        <th scope="col" style="text-align: center;">Nombre</th>
                                        <th scope="col" style="text-align: center;">Apellido Materno</th>
                                        <th scope="col" style="text-align: center;">Apellido Paterno</th>
                                        <th scope="col" style="text-align: center;">Carrera</th>
                                        <th scope="col" style="text-align: center;">Sexo</th>
                                        <th scope="col" style="text-align: center;">Generar Constancia</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as  $user)
                                    <tr>
                                        
                                        <td style="text-align: center;">{{$user->id}}</td>
                                        <td style="text-align: center;">{{$user->EST_numeroCuenta}}</td>
                                        <td style="text-align: center;">{{$user->EST_nombre}}</td>
                                        <td style="text-align: center;">{{$user->EST_apellidoPaterno}} </td>
                                        <td style="text-align: center;"> {{$user->EST_apellidoMaterno}}</td>
                                        <td style="text-align: center;">{{$user->EST_carrera}}</td>
                                        <td style="text-align: center;">{{$user->EST_sexo}}</td>
                                        <td style="text-align: center;"><a href="{{route('estudiante_pdf',['id'=>$user->id])}}" target="_blank" class="btn btn-primary">
                                            Generar
                                            </a></td> 




    </div>            
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                         
            </div>
            <div id="2" class="contenido-inscripcion d-none">
                <h3 class="m-0 text-dark text-center">Generar Constancias</h3>
                
            </div>
        </div>
    </div>
@stop
@section('js')
 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        pdfEstudiante(id){
                window.open('/generarconstancia/pdf/'+ id ,'_blank');
            },

    </script>
    <script>
         const tab = document.querySelector('.nav-tabs')
        const items = document.querySelectorAll('.nav-tabs .nav-item')
        const contents = document.querySelectorAll('.contenido-inscripcion')
        tab.addEventListener('click', activar);

        function activar(e) {
            e.preventDefault();
            if (!e.target.classList.contains('active')) {
                let lengthUrl = e.target.href.length
                let id = e.target.href.substring(lengthUrl - 1)
                quitarActive(parseInt(id));
                e.target.classList.add('active')
            }
        }

        function quitarActive(id) {
            items.forEach((item) => {
                item.children[0].classList.remove('active')
            });
            contents.forEach(element => {
                element.classList.remove('d-block')
                element.classList.add('d-none')
            });
            contents[id - 1].classList.add('d-block')
        }
        $(document).ready(function() {
            $('#table').DataTable();
        });
        $(document).ready(function() {
            $('#tableG').DataTable();
        });
    </script>
@endsection

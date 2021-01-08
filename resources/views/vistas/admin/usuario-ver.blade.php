@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Control de Usuarios</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <table class="table table-responsive w-100" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Correo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td>{{$estudiante->usuario->email}}</td>
                                <td>{{$estudiante->EST_nombre}}</td>
                                <td>{{$estudiante->EST_apellidoPaterno}}</td>
                                <td>{{$estudiante->EST_telefono}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

    </script>
@endsection
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
                                <th scope="col" style="text-align: center;">Nombre de Usuario</th>
                                <th scope="col" style="text-align: center;">Correo</th>
                                <th scope="col" style="text-align: center;">Contraseña</th>
                                <th scope="col" style="text-align: center;">Tipo</th>
                                <th scope="col" style="text-align: center;">Editar</th>
                                <th scope="col" style="text-align: center;">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td style="text-align: center;">{{$estudiante->usuario->name}}</td>
                                <td style="text-align: center;">{{$estudiante->usuario->email}}</td>
                                <td style="text-align: center;">{{$estudiante->usuario->password}}</td>
                                <td style="text-align: center;">{{$estudiante->usuario->tipo}}</td>
                                <td><a href="#">Editar</a></td>
                                <td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="#">Eliminar</a></td>
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
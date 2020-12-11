@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Control de Cuentas</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form action="">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="subir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="text" name="pass" id="subir" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Crear" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <table class="table table-responsive w-100" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">No. Cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Israel</td>
                                <td>Velazquez</td>
                                <td>2017330949</td>
                            </tr>
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
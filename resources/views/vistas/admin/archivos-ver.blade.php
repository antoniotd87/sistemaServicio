@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Control de Archivos Historicos Registrados</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <table class="table table-responsive w-100" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Base 1</td>
                                <td>20/12/2019</td>
                                <td><a href="" class="btn btn-secondary">Ver Archivo</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <form action="">
                        <div class="form-group">
                            <label for="subir">Subir nuevo archivo</label>
                            <input type="file" name="subir" id="subir" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Subir" class="btn btn-primary form-control">
                        </div>
                    </form>
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

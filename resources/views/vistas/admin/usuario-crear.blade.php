@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Creacion de Usuarios</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form action="{{ route('usuarios.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Usuario</label>
                            <input type="text" name="name" id="subir"
                                class="@error('name') is-invalid @enderror form-control">
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electronico</label>
                            <input type="email" name="email" id="subir"
                                class="@error('email') is-invalid @enderror form-control">
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="subir"
                                class="@error('password') is-invalid @enderror form-control">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Crear" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
                <br>
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

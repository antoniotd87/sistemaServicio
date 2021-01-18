@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Subir nuevo archivo historico</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form enctype="multipart/form-data" method="post" action="{{route("archivos.store")}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del archivo</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="archivo">Subir nuevo archivo</label>
                            <input type="file" name="archivo" id="archivo" class="form-control">
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

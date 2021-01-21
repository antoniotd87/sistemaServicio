@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Notificaciones de los alumnos
    </h2>
@stop
@section('content')
    <div class="card">
        {{-- <h4 class="m-0 text-dark text-center">
            Ultimas notificaciones
        </h4> --}}
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">

                @if (count($data) == 0)
                    <h5 class="m-0 mb-5 text-dark text-center">No hay notificaciones</h5>
                @endif
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card-header">
                            <h5 class="">{{ $item['data']['nombre'] }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="card-text mb-1">{{ $item['data']['mensaje'] }}</p>
                                    <div class="d-flex justify-content-start">
                                        <p class="text-sm text-muted mb-0 mt-0 mr-5"><i class="far fa-clock mr-1"></i>
                                            {{ $item->created_at->diffForHumans() }}
                                        </p>
                                        <a href="{{ route('notificacion.ver', ['notificacion' => $item['data']['id'] . '&' . $item['data']['accion']]) }}"
                                            target="_blank" class="btn btn-primary ">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <form action="{{ route('notificacion.mensaje', ['id' => $item['data']['id']]) }}"
                                        method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('mensaje') is-invalid @enderror"
                                                name="mensaje" id="mensaje" placeholder="Mensaje">
                                            @error('mensaje')
                                                <span class="alert  text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="notificacion" value="{{ $item['id'] }}">
                                        <input type="hidden" name="accion" value="{{ $item['data']['accion'] }}">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fas fa-share-square"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <h4 class="m-0 text-dark text-center">
            Todas las notificaciones
        </h4>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                @foreach ($data2 as $item)
                    <div class="card">
                        <div class="card-header">
                            <h5 class="">{{ $item['data']['nombre'] }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="card-text mb-1">{{ $item['data']['mensaje'] }}</p>
                                    <div class="d-flex justify-content-start">
                                        <p class="text-sm text-muted mb-0 mt-0 mr-5"><i class="far fa-clock mr-1"></i>
                                            {{ $item->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('notificacion.ver', ['notificacion' => $item['data']['id'] . '&' . $item['data']['accion']]) }}"
                                        target="_blank" class="btn btn-primary ">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center">
            </div>
        </div> --}}
    </div>
@endsection

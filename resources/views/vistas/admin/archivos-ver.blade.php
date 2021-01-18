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
                                <th scope="col">Descargar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos ?? '' as $dato)

                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $dato->AHT_nombre }}</td>
                                    <td>{{ $dato->created_at }}</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" onclick="obtenerArchivo({{ $dato->id }})">
                                            Ver archivo
                                        </button></td>
                                    <td><a href="{{ asset('storage') . '/' . $dato->AHT_ruta }}" download
                                            class="btn btn-secondary">Descargar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br><br>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Vista Previa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="ver-archivo"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
        const verArchivo = document.querySelector('#ver-archivo');
        const embed = document.createElement('embed');
        embed.type = "application/pdf";
        embed.width = "100%";
        embed.height="600px";
        // console.log(verArchivo);

        function obtenerArchivo(id) {
            console.log(id);
            const params = {
                id
            };
            axios
                .get(`archivos/${id}`, {
                    params,
                    _method: "get"
                })
                .then((respuesta) => {
                    embed.src =`{{ asset('storage')}}/${respuesta.data}`
                    $("#ver-archivo").html(embed);
                })
                .catch((error) => {
                    console.log(error);
                });
        }

    </script>
@endsection

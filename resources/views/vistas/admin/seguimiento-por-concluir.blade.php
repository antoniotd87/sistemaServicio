@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h1 class="text-center">Control de Alumnos por Concluir</h1>
@stop
@section('content')
    <div class="card p-2">
        <div class="tab card-body p-0 px-2 pt-2 row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="m-0 text-dark text-center">Por concluir: {{ $datos[0]+$datos[1]+$datos[2]+$datos[3] }}  Alumnos</h3>
                        <br>
                        <div class="chart">
                            <canvas id="barAlumnosCarrera"
                                style="min-height: 230px; height: 280px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="m-0 text-dark text-center">Alumnos por Conluir el SS</h3>
                        <br>
                        <div class="d-flex justify-content-center">

                            <table class="table table-responsive w-100" id="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{$user->EST_nombre}}</td>
                                        <td>{{$user->EST_apellidoPaterno}}</td>
                                        <td>{{$user->EST_telefono}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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


        var barChartDataPPS = {
            labels: ["Publico", "Privado"],
            datasets: [{
                    label: "Hombres",
                    backgroundColor: "rgba(60,141,188,0.9)",
                    borderColor: "rgba(60,141,188,0.8)",
                    pointRadius: false,
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [{{$datos[1]}}, {{$datos[3]}}],
                },
                {
                    label: "Mujeres",
                    backgroundColor: "rgba(210, 214, 222, 1)",
                    borderColor: "rgba(210, 214, 222, 1)",
                    pointRadius: false,
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [{{$datos[1]}}, {{$datos[3]}}],
                },
            ],
        };
        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }
        var barChartPPS = $('#barAlumnosCarrera').get(0).getContext('2d')
        var barChart = new Chart(barChartPPS, {
            type: 'bar',
            data: barChartDataPPS,
            options: barChartOptions
        })

    </script>
@endsection

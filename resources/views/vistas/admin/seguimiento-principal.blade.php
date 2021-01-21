@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')
    <h2 class="m-0 text-dark text-center">
        Informacion General
    </h2>
@stop
@section('content')
    <div class="card p-3">
        <div class="row text-center">
            <div class="col-12 row d-flex justify-content-center mt-2">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pr-0">
                    <div class="card card-primary h-100">
                        <div class="card-header">
                            <h5 class="card-tittle m-0">Total de Alumnos</h5>
                        </div>
                        <div class="card-body">
                            <p class="m-0">{{ $datos['total'] }}</p>
                            <x-dg-progress value="{{ $datos['total']/$datos['total']*100 }}" bg="primary" size="sm" :stripped="true" :vertical="false" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
                <div class="card card-info h-100">
                    <div class="card-header">
                        <h5 class="card-tittle m-0">Inscritos</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-0">{{$datos['inscritos']}}</p>
                        <x-dg-progress value="{{ $datos['inscritos']/$datos['total']*100 }}" bg="info" size="sm" :stripped="true" :vertical="false" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
                <div class="card card-danger h-100">
                    <div class="card-header">
                        <h5 class="card-tittle m-0">Bajas</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-0">{{$datos['bajas']}}</p>
                        <x-dg-progress value="{{ $datos['bajas']/$datos['total']*100 }}" bg="danger" size="sm" :stripped="true" :vertical="false" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
                <div class="card card-warning h-100">
                    <div class="card-header">
                        <h5 class="card-tittle m-0">Por Concluir</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-0">{{$datos['porConcluir']}}</p>
                        <x-dg-progress value="{{ $datos['porConcluir']/$datos['total']*100 }}" bg="warning" size="sm" :stripped="true" :vertical="false" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
                <div class="card card-success h-100">
                    <div class="card-header">
                        <h5 class="card-tittle m-0">Liberacion</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-0">{{$datos['liberados']}}</p>
                        <x-dg-progress value="{{ $datos['liberados']/$datos['total']*100 }}" bg="success" size="sm" :stripped="true" :vertical="false" />
                    </div>
                </div>
            </div>
            
            <div class="w-100"></div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="card card-secondary h-100">
                    <div class="card-header">
                        <h3 class="card-title">Total de Alumnos Registrados</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="lineChart" style="height: 350px; min-height: 230px"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                <div class="card card-secondary h-100">
                    <div class="card-header">
                        <h3 class="card-title">Estado de alumno/sexo</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 230px; height: 350px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        var areaChartData = {
            labels: ["Inscrito", "Baja", "Por Concluir", "Liberacion"],
            datasets: [{
                label: "Mujeres",
                    backgroundColor: "rgba(210, 214, 222, 1)",
                    borderColor: "rgba(210, 214, 222, 1)",
                    pointRadius: false,
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [{{$datos['mujeres'][0]}}, {{$datos['mujeres'][1]}}, {{$datos['mujeres'][3]}}, {{$datos['mujeres'][2]}}],
                    
                },
                {
                    label: "Hombres",
                    backgroundColor: "rgba(60,141,188,0.9)",
                    borderColor: "rgba(60,141,188,0.8)",
                    pointRadius: false,
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                     data: [{{$datos['hombres'][0]}}, {{$datos['hombres'][1]}}, {{$datos['hombres'][2]}}, {{$datos['hombres'][3]}}],
                    
                },
            ],
        };
        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        };
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions);
        var lineChartData = jQuery.extend(true, {}, areaChartData);
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false;

        var lineChart = new Chart(lineChartCanvas, {
            type: "line",
            data: lineChartData,
            options: lineChartOptions,
        });


        /* Grafica de Barras */
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

    </script>

@endsection

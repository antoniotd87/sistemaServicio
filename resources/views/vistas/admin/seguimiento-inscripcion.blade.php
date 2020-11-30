@extends('adminlte::page')


@section('title', 'Sistema Servicio')

@section('content_header')

@stop
@section('content')
    <div class="card p-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#1">Graficas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#2">Institucion Educativa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#3">Prestador de SS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#4">Institucion de SS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#5">Estado de SS</a>
            </li>
        </ul>
        <div class="tab card-body p-0 px-2 pt-2">
            <div id="1" class="contenido-inscripcion d-block">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Alumnos Publico/Privado</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="donutChartAlumnosPublicoPrivado"
                                    style="min-height: 250px; height: 280px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Alumnos por Carrera</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barAlumnosCarrera"
                                        style="min-height: 230px; height: 280px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Alumnos por Sexo</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="donutChartAlumnosSexo"
                                    style="min-height: 250px; height: 280px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Alumnos Publico Privado Sexo</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barAlumnosPublicPrivateSex"
                                        style="min-height: 230px; height: 280px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <div id="2" class="contenido-inscripcion d-none">
                <h3 class="m-0 text-dark text-center">Datos de la insitucion educativa</h3>
                <br>
                <div class="d-flex justify-content-center">

                    <table class="table table-responsive w-100" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tecnologico de Estudios SSF</td>
                                <td>San Felipe del Progreso</td>
                                <td>7121754585</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="3" class="contenido-inscripcion d-none">
                <h3 class="m-0 text-dark text-center">
                    Datos del Prestador de Servicio Social (Alumnos)</h3>
                <br>
                <div class="d-flex justify-content-center">

                    <table class="table table-responsive w-100" id="tablePSS">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sandra</td>
                                <td>Flores</td>
                                <td>7514847584</td>
                                <td>91.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="4" class="contenido-inscripcion d-none">
                <h3 class="m-0 text-dark text-center">
                    Datos del Prestador de Servicio Social (Alumnos)</h3>
                <br>
                <div class="d-flex justify-content-center">

                    <table class="table table-responsive w-100" id="tableER">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Encargado</th>
                                <th scope="col">Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Presidencia Municipal</td>
                                <td>Atlacomulco</td>
                                <td>Juan Perez</td>
                                <td>10:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="5" class="contenido-inscripcion d-none">
                <h3 class="m-0 text-dark text-center">
                    Datos del Prestador de Servicio Social (Alumnos)</h3>
                <br>
                <div class="d-flex justify-content-center">

                    <table class="table table-responsive w-100" id="tableESS">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Inicio</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jonh Jhonson</td>
                                <td>Lopez</td>
                                <td>10-08-2020</td>
                                <td>Liberado</td>
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
        const tab = document.querySelector('.nav-tabs')
        const items = document.querySelectorAll('.nav-tabs .nav-item')
        const contents = document.querySelectorAll('.contenido-inscripcion')
        tab.addEventListener('click', activar);

        function activar(e) {
            e.preventDefault();
            if (!e.target.classList.contains('active')) {
                let lengthUrl = e.target.href.length
                let id = e.target.href.substring(lengthUrl - 1)
                quitarActive(parseInt(id));
                e.target.classList.add('active')
            }
        }

        function quitarActive(id) {
            items.forEach((item) => {
                item.children[0].classList.remove('active')
            });
            contents.forEach(element => {
                element.classList.remove('d-block')
                element.classList.add('d-none')
            });
            contents[id - 1].classList.add('d-block')
        }



        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutAlumnosPublicoPrivado = $('#donutChartAlumnosPublicoPrivado').get(0).getContext('2d')
        var donutDataPP = {
            labels: [
                'Publico',
                'Privado',
            ],
            datasets: [{
                data: [91, 109],
                backgroundColor: ['rgba(60,141,188)', 'rgba(210, 214, 222)'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChartPublicoPrivado = new Chart(donutAlumnosPublicoPrivado, {
            type: 'doughnut',
            data: donutDataPP,
            options: donutOptions
        })

        var donutAlumnosSexo = $('#donutChartAlumnosSexo').get(0).getContext('2d')
        var donutDataPPS = {
            labels: [
                'Hombre',
                'Mujer',
            ],
            datasets: [{
                data: [151, 49],
                backgroundColor: ['rgba(60,141,188)', 'rgba(210, 214, 222)'],
            }]
        }
        var donutCharSexo = new Chart(donutAlumnosSexo, {
            type: 'doughnut',
            data: donutDataPPS,
            options: donutOptions
        })


        /* Grafica de Barras */
        var areaChartData = {
            labels: ["Informatica", "Civil", "Quimica", "Industrias Alimentarias", "Energias Renovables",
                "Contador Publico"
            ],
            datasets: [{
                    label: "Hombres",
                    backgroundColor: "rgba(60,141,188,0.9)",
                    borderColor: "rgba(60,141,188,0.8)",
                    pointRadius: false,
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [28, 48, 40, 19, 15, 57],
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
                    data: [65, 59, 80, 81, 12, 15],
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


        var barChartCarrera = $('#barAlumnosCarrera').get(0).getContext('2d')
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

        var barChart = new Chart(barChartCarrera, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })


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
                    data: [38, 48],
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
                    data: [65, 59],
                },
            ],
        };

        var barChartPPS = $('#barAlumnosPublicPrivateSex').get(0).getContext('2d')
        var barChart = new Chart(barChartPPS, {
            type: 'bar',
            data: barChartDataPPS,
            options: barChartOptions
        })









        $(document).ready(function() {
            $('#table').DataTable();
        });
        $(document).ready(function() {
            $('#tablePSS').DataTable();
        });
        $(document).ready(function() {
            $('#tableER').DataTable();
        });
        $(document).ready(function() {
            $('#tableESS').DataTable();
        });

    </script>
@endsection

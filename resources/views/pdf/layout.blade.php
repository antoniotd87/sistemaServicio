<html>

<head>
    <title>App Name - @yield('title')</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        margin: 1.5cm 1.5cm;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10pt;
    }

    p {
        line-height: 1.3;
        text-align: justify;
    }

    .titulo {
        font-weight: normal;
        text-transform: uppercase;
        font-size: 14pt;
    }
    #logos {
        height: 50px;
        width: 150px;
    }
    #table {
        width: all;
            }
        td, th {
        border: black 0.5px solid;
    }
    

    .subtitulo {
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1.3;
    }

    .izquierda {
        text-align: right;
    }
    .salto{
        margin-bottom: 25pt;
    }
    .salt{
        margin-bottom: 15pt;
    }
    .saltos{
        margin-bottom: 5pt;
    }
    .interlineado{
        margin-bottom: 5pt;
    }
    .centro{
        text-align: center;
    }
    .subrayado{
        text-decoration: underline;
    }
    .linea{
        font-size: 25px;
    }
</style>

<body>
    @yield('content')
</body>

</html>

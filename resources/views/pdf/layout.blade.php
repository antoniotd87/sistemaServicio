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
        margin: 2.5cm 3cm;
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

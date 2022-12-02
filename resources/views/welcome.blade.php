<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/0f9a163592.js" crossorigin="anonymous"></script>
    <title>Layout principal</title>
</head>

<body>
    <div id="titulo">
        <h1>Bienvenido!</h1>
    </div>

    <main id="contenidoP">
        <div class="panel">
            <a href="{{ route('cursos_index') }}"><i class="fa-solid fa-database"></i>Cursos</a>
            <a href="{{ route('articulos_index') }}"><i class="fa-solid fa-database"></i>Articulos</a>
            <a href="{{ route('peliculas_index') }}"><i class="fa-solid fa-database"></i>Peliculas</a>
        </div>
    </main>
</body>

</html>
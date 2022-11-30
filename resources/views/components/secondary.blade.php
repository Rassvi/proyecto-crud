<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ URL::assets('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::assets('css/second.css') }}">

    <title>{{ $title ?? 'Sin titulo' }}</title>
</head>

<body>
    <header>
        <h1>Segundo layout</h1>
    </header>

    <main>
        <p>La vista funciona</p>
        {{ $slot }}
    </main>
</body>

</html>
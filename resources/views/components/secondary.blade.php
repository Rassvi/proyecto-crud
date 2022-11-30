<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/0f9a163592.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/second.css') }}">

    <title>{{ $title ?? 'Sin titulo' }}</title>
</head>

<body>
    <header>
        <h1>{{ $header ?? 'Sin titulo!' }}</h1>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
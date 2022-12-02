<x-secondary>
    <x-slot name="title">Mostrando: {{ $pelicula->pelicula }}</x-slot>
    <x-slot name="header">{{ $pelicula->pelicula }}</x-slot>

    <ul>
        <li>{{ $pelicula->pelicula }}</li>
        <li>{{ $pelicula->fecha }}</li>
        <li>{{ $pelicula->duracion }}</li>
        <li>{{ $pelicula->resumen }}</li>
        <li>{{ $pelicula->ingreso }}</li>
    </ul>

    <a href="{{ route('peliculas_index') }}"><i class="fa-solid fa-square-caret-left"></i></a>
</x-secondary>
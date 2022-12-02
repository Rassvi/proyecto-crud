<x-secondary>
    <x-slot name="title">Peliculas: Index</x-slot>
    <x-slot name="header">Todas las Peliculas: </x-slot>
    @php
        $id = 0;
        $vacio = $peliculas->isEmpty();
    @endphp

    @if ($vacio)
    <p>No hay nada</p>
    <a href="{{ route('peliculas_create') }}"><i class="fa-solid fa-plus"></i></a>
    @else

    @foreach ($peliculas as $pelicula)
    <div style="border: 1px solid;">
        <p>Nombre: {{ $pelicula->pelicula }}</p>
        <p>ID: {{ ++$id }}</p>

        <a href="{{ route('peliculas_show', $pelicula) }}"><i class="fa-solid fa-eye"></i></a>
        <a href="{{ route('peliculas_edit', $pelicula) }}"><i class="fa-solid fa-pencil"></i></a>
        <form action="{{ route('peliculas_destroy', $pelicula) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"><i class="fa-solid fa-trash" ></i></button>
        </form>
    </div>
    <br>
    @endforeach

    <a href="{{ route('peliculas_create') }}"><i class="fa-solid fa-plus"></i></a>
    @endif

</x-secondary>
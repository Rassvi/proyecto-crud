<x-secondary>
    <x-slot name="title">Articulos: Index</x-slot>
    <x-slot name="header">Todos los articulos: </x-slot>
    @php
        $id = 0;
        $vacio = $articulos->isEmpty();
    @endphp

    @if ($vacio)
    <p>No hay nada</p>
    <a href="{{ route('articulos_create') }}"><i class="fa-solid fa-plus"></i></a>
    @else

    @foreach ($articulos as $articulo)
    <div style="border: 1px solid;">
        <p>Nombre: {{ $articulo->articulo}}</p>
        <p>ID: {{ ++$id }}</p>

        <a href="{{ route('articulos_show', $articulo) }}"><i class="fa-solid fa-eye"></i></a>
        <a href="{{ route('articulos_edit', $articulo) }}"><i class="fa-solid fa-pencil"></i></a>
        <form action="{{ route('articulos_destroy', $articulo) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"><i class="fa-solid fa-trash" ></i></button>
        </form>
    </div>
    <br>
    @endforeach

    <a href="{{ route('articulos_create') }}"><i class="fa-solid fa-plus"></i></a>
    @endif
</x-secondary>
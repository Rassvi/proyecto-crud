<x-secondary>
    <x-slot name="title">Mostrando: {{ $articulo->articulo }}</x-slot>
    <x-slot name="header">{{ $articulo->articulo }}</x-slot>

    <ul>
        <li>Clave: {{ $articulo->clave }}</li>
        <li>Nombre: {{ $articulo->articulo }}</li>
        <li>Descripcion: {{ $articulo->descripcion }}</li>
        <li>Precio: ${{ $articulo->precio }}</li>
        <li>Numero en inventario: {{ $articulo->inventario }}</li>
        <li>Categoría: {{ $articulo->categoria }}</li>
        <li>Garantía: {{ $articulo->garantia }}</li>
        @php
            vardump($articulo->garantia);
        @endphp
    </ul>

    <a href="{{ route('articulos_index') }}"><i class="fa-solid fa-square-caret-left"></i></a>
</x-secondary>
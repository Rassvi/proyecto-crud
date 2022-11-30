<x-secondary>
    <x-slot name="title">Mostrando: {{ $curso->curso }}</x-slot>
    <x-slot name="header">{{ $curso->curso }}</x-slot>

    <ul>
        <li>Precio: ${{ $curso->precio }}</li>
        <li>Fecha: {{ $curso->fecha }}</li>
    </ul>

    <a href="{{ route('cursos_index') }}"><i class="fa-solid fa-square-caret-left"></i></a>
</x-secondary>
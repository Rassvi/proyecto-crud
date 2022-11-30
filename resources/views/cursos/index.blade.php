<x-secondary>
    <x-slot name="title">Cursos: Index</x-slot>
    <x-slot name="header">Todos los Cursos: </x-slot>
    @php
        $id = 0;
        $vacio = $cursos->isEmpty();
    @endphp

    @if ($vacio)
    <p>No hay nada</p>
    <a href="{{ route('cursos_update') }}"><i class="fa-solid fa-plus"></i></a>
    @else

    @foreach ($cursos as $curso)
    <div style="border: 1px solid;">
        <p>Nombre: {{ $curso->curso }}</p>
        <p>ID: {{ ++$id }}</p>

        <a href="{{ route('cursos_show', $curso) }}"><i class="fa-solid fa-eye"></i></a>
        <a href="{{ route('cursos_edit', $curso) }}"><i class="fa-solid fa-pencil"></i></a>
        
    </div>
    <br>
    @endforeach

    <a href="{{ route('cursos_create') }}"><i class="fa-solid fa-plus"></i></a>
    @endif

</x-secondary>
<x-secondary>
    <x-slot name="title">Agregar una pelicula!</x-slot>
    <x-slot name="header">Agregar: </x-slot>
    
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    
    <br>

    <form action="{{ route('peliculas_store') }}" method="post">
        @csrf
        <label for="pelicula">pelicula</label>
        <input type="text" name="pelicula" id="pelicula" value="{{ old('pelicula') }}">
        <br>

        <label for="fecha">fecha</label>
        <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}">
        <br>

        <label for="duracion">duracion</label>
        <input type="number" name="duracion" id="duracion" value="{{ old('duracion') }}">
        <br>

        <label for="resumen">resumen</label>
        <input type="text" name="resumen" id="resumen" value="{{ old('resumen') }}">
        <br>

        <label for="ingreso">ingreso</label>
        <input type="number" name="ingreso" id="ingreso" value="{{ old('ingreso') }}">
        <br>

        <input type="submit" value="Crear!">
    </form>

</x-secondary>
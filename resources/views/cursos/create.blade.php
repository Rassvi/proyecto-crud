<x-secondary>
    <x-slot name="title">Crear nuevo curso!</x-slot>
    <x-slot name="header">Crear: </x-slot>
    
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <br>

    <form action="{{ route('cursos_store') }}" method="post">
        @csrf
        <label for="curso">Curso</label>
        <input type="text" name="curso" id="curso" value="{{ old('curso') }}">

        <br>
        <label for="precio">Precio</label>
        <input type="number" min="0" step="any" name="precio" id="precio" value="{{ old('precio') }}">

        <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}">

        <br>
        <input type="submit" value="Agregar!">
    </form>

</x-secondary>
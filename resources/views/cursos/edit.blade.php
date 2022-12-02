<x-secondary>
    <x-slot name="title">Editar: {{ $curso->curso }}</x-slot>
    <x-slot name="header">{{ $curso->curso }} </x-slot>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('cursos_update', $curso) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        
        <label for="curso">curso</label><br> 
        <input type="text" name="curso" value="{{ old('curso', $curso->curso) }}" id="curso"><br> 

        <label for="precio">precio</label><br> 
        <input type="number" step="any" name="precio" value="{{ old('precio', $curso->precio) }}" id="precio"><br> 
        
        <label for="fecha">Fecha</label><br> 
        <input type="date" name="fecha" value="{{ old('fecha', $curso->fecha) }}" id="fecha"><br> 
        
        <input type="submit" value="Editar"> 
    </form>
</x-secondary>
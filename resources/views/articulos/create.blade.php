<x-secondary>
    @if ($errors->any())
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('articulos_store') }}" method="post">
        @csrf
        <label for="clave">clave</label>
        <input type="text" name="clave" id="clave" value="{{ old('clave') }}"> <br>

        <label for="articulo">articulo</label>
        <input type="text" name="articulo" id="articulo" value="{{ old('articulo') }}"> <br>

        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}"> <br>

        <label for="precio">precio</label>
        <input type="number" step="any" name="precio" id="precio" value="{{ old('precio') }}"> <br>

        <label for="inventario">inventario</label>
        <input type="number" name="inventario" id="inventario" value="{{ old('inventario') }}"> <br>

        <label for="categoria">categoria</label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}"> <br>

        <label for="garantia">garantia</label>
        <input type="number" name="garantia" id="garantia" value="{{ old('garantia') }}"> <br>

        <input type="submit" value="Crear">
    </form>
</x-secondary>
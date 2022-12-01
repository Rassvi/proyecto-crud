<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    public function show(Articulo $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }

    #CREATE
    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'clave'=>['required', 'alpha_num'],
            'articulo'=>['required'],
            'descripcion'=>['nullable'],
            'precio'=>['required', 'numeric'],
            'inventario'=>['required', 'numeric'],
            'categoria'=>['required'],
            'garantía'=>['required', 'numeric'],
        ]);

        $articulo = new Articulo();
        $articulo->clave = $request->clave;
        $articulo->articulo = $request->articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->inventario = $request->inventario;
        $articulo->categoria = $request->categoria;
        $articulo->garantía = $request->garantía;
        $articulo->save();

        return redirect()->route('articulos_show', $articulo);
    }

    #EDIT
    public function edit(Articulo $articulo)
    {
        return view('articulos.edit', compact('articulo'));
    }

    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'clave'=>['required', 'alpha_num'],
            'articulo'=>['required'],
            'descripcion'=>['nullable'],
            'precio'=>['required', 'numeric'],
            'inventario'=>['required', 'numeric'],
            'categoria'=>['required'],
            'garantía'=>['required', 'numeric'],
        ]);

        $articulo->clave = $request->clave;
        $articulo->articulo = $request->articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->inventario = $request->inventario;
        $articulo->categoria = $request->categoria;
        $articulo->garantía = $request->garantía;
        $articulo->save();

        return redirect()->route('articulos_show', $articulo);
    }

    #DESTROY
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulos_index');
    }
}

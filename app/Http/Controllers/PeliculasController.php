<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    #CREATE
    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelicula' => ['required'],
            'fecha' => ['required'],
            'duracion' => ['required'],
            'resumen' => ['required'],
            'ingreso' => ['required'],
        ]);

        $pelicula = new Pelicula();
        $pelicula->pelicula = $request->pelicula;
        $pelicula->fecha = $request->fecha;
        $pelicula->duracion = $request->duracion;
        $pelicula->resumen = $request->resumen;
        $pelicula->ingreso = $request->ingreso;
        $pelicula->save();

        return redirect()->route('peliculas_show', $pelicula);
    }

    #UPDATE
    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'pelicula' => ['required'],
            'fecha' => ['required'],
            'duracion' => ['required'],
            'resumen' => ['required'],
            'ingreso' => ['required'],
        ]);

        $pelicula->pelicula = $request->pelicula;
        $pelicula->fecha = $request->fecha;
        $pelicula->duracion = $request->duracion;
        $pelicula->resumen = $request->resumen;
        $pelicula->ingreso = $request->ingreso;
        $pelicula->save();

        return redirect()->route('peliculas_show', $pelicula);
    }

    #DELETE
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas_index');
    }
}

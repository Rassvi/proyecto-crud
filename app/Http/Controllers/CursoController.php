<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('cursos.index', compact('cursos'));
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    } 

    # Crear un curso

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'curso'=>['required'],
            'precio'=>['required', 'numeric'],
            'fecha'=>['required', 'date']
        ]);

        $curso = new Curso();
        $curso->curso = $request->curso;
        $curso->precio = $request->precio;
        $curso->fecha = $request->fecha;
        $curso->save();

        return redirect()->route('cursos_show', $curso);
    }

    # Modificar un curso
    public function edit(Curso $curso) 
    { 
        return view('cursos.edit', compact('curso')); 
    } 

    public function update(Request $request, Curso $curso) 
    { 
        $request->validate([ 
            'curso' => 'required', 
            'precio' => 'required', 
            'fecha' => 'required', 
        ]); 

        $curso->curso = $request->curso; 
        $curso->precio = $request->precio; 
        $curso->fecha = $request->fecha; 
        $curso->save();

        return redirect()->route('cursos_show', $curso);
    }

    # Eliminar curso
}
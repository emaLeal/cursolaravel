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

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function createCurso(Request $request)
    {
        $curso = new Curso;

        $curso->nombre = $request->nombre;

        $curso->description = $request->description;

        $curso->save();

        return redirect('/cursos');
    }
}

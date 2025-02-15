<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('professor.cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('professor.cursos.create');
    }

    public function store(Request $request)
    {
        Curso::create([
            'titulo' => $request->titulo,
            'professor_nome' => $request->professor_nome,
            'carga_horaria' => $request->carga_horaria,
            'descricao' => $request->descricao,
            'certificado' => $request->certificado,
        ]);
    
        return redirect()->route('professor.cursos.index')->with('success', 'Curso criado com sucesso!');
    }
    

    public function edit(Curso $curso)
    {
        return view('professor.cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        return redirect()->route('professor.cursos.index')->with('success', 'Curso atualizado!');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('professor.cursos.index')->with('success', 'Curso removido!');
    }
}


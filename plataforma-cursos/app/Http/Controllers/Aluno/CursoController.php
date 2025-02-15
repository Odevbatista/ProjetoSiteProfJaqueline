<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('aluno.cursos.index', compact('cursos'));
    }
	public function comprar($id)
{
    session()->put('comprado_'.$id, true); // Salva no armazenamento da sessão
    return redirect()->route('aluno.cursos.index');
}


}


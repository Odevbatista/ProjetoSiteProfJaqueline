<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class ProgressoController extends Controller
{
    public function marcar(Curso $curso, Request $request)
    {
        $curso->update([
            'status' => $request->status // 'Concluído', 'Finalizado', 'Faltando'
        ]);
        return redirect()->route('aluno.cursos.index')->with('success', 'Status atualizado!');
    }
}


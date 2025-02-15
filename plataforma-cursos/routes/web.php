<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Professor\CursoController as ProfessorCursoController;
use App\Http\Controllers\Aluno\CursoController as AlunoCursoController;
use App\Http\Controllers\Aluno\ProgressoController;

// Rota para a página inicial (Landing Page)
Route::get('/', function () {
    return view('landing');
});

// Grupo de Rotas para Professores
Route::prefix('professor')->group(function () {
    Route::get('/cursos', [ProfessorCursoController::class, 'index'])->name('professor.cursos.index');
    Route::get('/cursos/create', [ProfessorCursoController::class, 'create'])->name('professor.cursos.create');
    Route::post('/cursos', [ProfessorCursoController::class, 'store'])->name('professor.cursos.store');
    Route::get('/cursos/{curso}/edit', [ProfessorCursoController::class, 'edit'])->name('professor.cursos.edit');
    Route::put('/cursos/{curso}', [ProfessorCursoController::class, 'update'])->name('professor.cursos.update');
    Route::delete('/cursos/{curso}', [ProfessorCursoController::class, 'destroy'])->name('professor.cursos.destroy');
});

// Grupo de Rotas para Alunos
Route::prefix('aluno')->group(function () {
    Route::get('/cursos', [AlunoCursoController::class, 'index'])->name('aluno.cursos.index');
    Route::post('/cursos/{curso}/comprar', [AlunoCursoController::class, 'comprar'])->name('aluno.cursos.marcar');
});


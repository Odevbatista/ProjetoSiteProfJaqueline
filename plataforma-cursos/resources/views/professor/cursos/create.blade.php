@extends('layouts.app')

@section('title', 'Adicionar Curso')

@section('content')
    <div class="form-container">
        <h2>Adicionar Novo Curso</h2>

        <form action="{{ route('professor.cursos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nome do Curso:</label>
                <input type="text" name="titulo" required>
            </div>

            <div class="form-group">
                <label>Nome do Professor:</label>
                <input type="text" name="professor_nome" required>
            </div>

            <div class="form-group">
                <label>Carga Horária (horas):</label>
                <input type="number" name="carga_horaria" required>
            </div>

            <div class="form-group">
                <label>Descrição:</label>
                <textarea name="descricao" required></textarea>
            </div>

            <div class="form-group">
                <label>Certificado:</label>
                <select name="certificado">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>

            <div class="button-container">
                <button type="submit">Adicionar Curso</button>
            </div>
        </form>

        <div class="button-container">
            <a href="{{ route('professor.cursos.index') }}">
                <button>Voltar</button>
            </a>
        </div>
    </div>
@endsection


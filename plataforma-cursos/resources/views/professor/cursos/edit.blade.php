@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
    <div class="form-container">
        <h2>Editar Curso</h2>

        <form action="{{ route('professor.cursos.update', $curso->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nome do Curso:</label>
                <input type="text" name="titulo" value="{{ $curso->titulo }}" required>
            </div>

            <div class="form-group">
                <label>Nome do Professor:</label>
                <input type="text" name="professor_nome" value="{{ $curso->professor_nome }}" required>
            </div>

            <div class="form-group">
                <label>Carga Horária (horas):</label>
                <input type="number" name="carga_horaria" value="{{ $curso->carga_horaria }}" required>
            </div>

            <div class="form-group">
                <label>Descrição:</label>
                <textarea name="descricao" required>{{ $curso->descricao }}</textarea>
            </div>

            <div class="form-group">
                <label>Certificado:</label>
                <select name="certificado">
                    <option value="Sim" {{ $curso->certificado == 'Sim' ? 'selected' : '' }}>Sim</option>
                    <option value="Não" {{ $curso->certificado == 'Não' ? 'selected' : '' }}>Não</option>
                </select>
            </div>

            <div class="button-container">
                <button type="submit">Salvar Alterações</button>
            </div>
        </form>

        <div class="button-container">
            <a href="{{ route('professor.cursos.index') }}">
                <button>Voltar</button>
            </a>
        </div>
    </div>
@endsection

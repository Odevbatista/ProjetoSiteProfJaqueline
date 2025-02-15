@extends('layouts.app')

@section('title', 'Painel do Professor')

@section('content')
    <div class="table-container">
        <h2>Cursos Cadastrados</h2>

        <a href="{{ route('professor.cursos.create') }}" class="add-course-button">+ Adicionar Novo Curso</a>

        <table>
            <thead>
                <tr>
                    <th>Nome do Curso</th>
                    <th>Professor</th>
                    <th>Carga Horária</th>
                    <th>Certificado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->titulo }}</td>
                        <td>{{ $curso->professor_nome }}</td>
                        <td>{{ $curso->carga_horaria }} horas</td>
                        <td>{{ $curso->certificado }}</td>
                        <td class="action-buttons">
    <a href="{{ route('professor.cursos.edit', $curso->id) }}">
        <button class="editar">Editar</button>
    </a>

    <form action="{{ route('professor.cursos.destroy', $curso->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="excluir">Excluir</button>
    </form>
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

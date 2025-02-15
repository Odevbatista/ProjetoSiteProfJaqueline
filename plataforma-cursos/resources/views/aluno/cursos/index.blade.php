@extends('layouts.app')

@section('title', 'Portal do Aluno')

@section('content')
    <div class="table-container">
        <h2>Cursos Disponíveis</h2>

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
    @if (session()->has('comprado_'.$curso->id))
        <button class="comprado">Curso Comprado</button>
    @else
        <form action="{{ route('aluno.cursos.marcar', $curso->id) }}" method="POST">
            @csrf
            <button type="submit" class="comprar">Comprar Curso Gratuitamente</button>
        </form>
    @endif
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


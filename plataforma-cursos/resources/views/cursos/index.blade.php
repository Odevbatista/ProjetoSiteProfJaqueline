@extends('layouts.app')

@section('title', 'Portal do Aluno')

@section('content')
    <h1>Portal do Aluno</h1>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                <strong>{{ $curso->titulo }}</strong> - Professor: {{ $curso->professor_nome }} - {{ $curso->carga_horaria }}h
                <br>Descrição: {{ $curso->descricao }}
                <br>Certificado: {{ $curso->certificado }}

                <form action="{{ route('aluno.cursos.marcar', $curso->id) }}" method="POST">
                    @csrf
                    <button type="submit">"Comprar" Curso Gratuitamente</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

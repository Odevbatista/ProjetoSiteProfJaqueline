@extends('layouts.app')

@section('title', 'Painel do Professor')

@section('content')
    <h1>Painel do Professor</h1>

    <!-- Abas de Navegação -->
    <ul class="tabs">
        <li><a href="#listar">Listar Cursos</a></li>
        <li><a href="#adicionar">Adicionar Curso</a></li>
    </ul>

    <!-- Aba Listar Cursos -->
    <div id="listar">
        <h2>Cursos Cadastrados</h2>
        <ul>
            @foreach ($cursos as $curso)
                <li>
                    {{ $curso->titulo }} - {{ $curso->carga_horaria }} horas
                    - <form action="{{ route('professor.cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Aba Adicionar Curso -->
    <div id="adicionar" style="display:none;">
        <h2>Adicionar Novo Curso</h2>
        <form action="{{ route('professor.cursos.store') }}" method="POST">
            @csrf
            <label>Nome do Curso:</label>
            <input type="text" name="titulo" required><br>

            <label>Nome do Professor:</label>
            <input type="text" name="professor_nome" required><br>

            <label>Carga Horária (horas):</label>
            <input type="number" name="carga_horaria" required><br>

            <label>Descrição:</label>
            <textarea name="descricao" required></textarea><br>

            <label>Certificado:</label>
            <select name="certificado">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <button type="submit">Adicionar Curso</button>
        </form>
    </div>

    <!-- Script para Alternar as Abas -->
    <script>
        document.querySelectorAll(".tabs a").forEach(tab => {
            tab.addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelector("#listar").style.display = "none";
                document.querySelector("#adicionar").style.display = "none";
                document.querySelector(tab.getAttribute("href")).style.display = "block";
            });
        });
    </script>
@endsection

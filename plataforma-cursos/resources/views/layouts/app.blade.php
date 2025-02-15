<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<!-- Estilos -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
<link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">

</head>
<body>

<header>
    <nav id="navbar">
        <ul>
            <li><a href="{{ url('/') }}">Início</a></li>
            <li><a href="{{ route('professor.cursos.index') }}">Painel do Professor</a></li>
            <li><a href="{{ route('aluno.cursos.index') }}">Portal do Aluno</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2024 - Plataforma de Cursos</p>
</footer>

</body>
</html>

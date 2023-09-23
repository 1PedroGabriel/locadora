<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css da aplicacao -->
        <link href="/css/styles.css" rel ="stylesheet">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/filmes/" class="nav-link">Filmes</a>
                    </li>
                   <!-- apenas aparece isso se o usuario tiver a propriedade admin igual a 1, laravel mysql -->
                   <!-- @if (auth()->check() && auth()->user()->admin == 1) -->
                   <li class="navbar-item">
                        <a href="/filmes/create" class="nav-link">Adicionar Filme</a>
                    </li>
                   <!-- @endif    -->
                   
                    </ul>
                </div>
            </nav>
        </header>
    </body>
<h1>bem vindo a seçao de filmes</h1>
<footer class="footer">
    <p>locadora de filmes &copy; 2023</p>
</footer>

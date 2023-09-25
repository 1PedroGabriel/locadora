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
    </head>

    <body>

        <header>

            <nav class="navegation">
                
                    <a href="/" class="nav-link">Home</a>
                    <a href="/filmes/" class="nav-link">Filmes</a>
                    <a href="/alugado" class="nav-link">Filme Alugado</a>


            </nav>

        </header>

<div class="bd">
    
    <h1>Bem Vindo à seção de filmes</h1>
    
        @foreach($movies as $movie)
        <hr>
        <div>
        <p>Filme:  {{ $movie->nome }}</p> 
        <p>Gênero: {{ $movie->genero }}</p>
    
        @if(!$movie->alugado)
       
       <form action="/filmes/alugar/{{ $movie->id }}" >
           
            <button class="links_b">Alugar</button>
       </form>
       
        @elseif($movie->id == auth()->user()->id_filme)
            <button class="links_b" >Você alugou este filme.</button>
    
        @else
            <button class="links_b" >Alugado</button>
    
        @endif
    
    
    
        @if (auth()->check() && auth()->user()->admin == 1)
        <a href="/filmes/edit/{{ $movie->id }}" class="links_b"  >Editar</a>
        <form action="/filmes/{{ $movie->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="link_d">Deletar</button>
        </form>
    
        @endif
    
        </div>
    
        @endforeach
</div>
</body>


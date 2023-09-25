
<!DOCTYPE html>
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
           
               <!-- apenas aparece isso se o usuario tiver a propriedade admin igual a 1, laravel mysql -->
               <!-- @if (auth()->check() && auth()->user()->admin == 1) -->
           
                    <a href='/f' class="nav-link"> Adicionar Filme</a>
           
               <!-- @endif    -->
               
       
        </nav>
    </header>

    <div class="bd">
        
        
        @if (auth()->user()->id_filme != NULL)
        <h1>Alugado</h1>
        <form action="/devolver" method="POST">
            @csrf
            <button class="buttonmain"><h1>Devolver Filme</h1></button>
        </form>
        @else
            <h1>Você ainda não alugou nenhum filme</h1>
            <p>Veja o nosso catálogo e alugue um filme.</p>
        @endif
    </div>

</body>
<footer class="footer">
    <p>locadora de filmes &copy; 2023</p>
</footer>

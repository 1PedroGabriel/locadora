
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
   
                    <a href="/alugado" class="nav-link">Filme Alugado</a>

                <!-- apenas aparece isso se o usuario tiver a propriedade admin igual a 1, laravel mysql -->
    <!-- @if (auth()->check() && auth()->user()->admin == 1) -->
          
                    <a href='/f' class="nav-link"> Adicionar Filme</a>

    <!-- @endif    -->

        </nav>

    </header>

    <div class="bd">
        
        <h1>Pagina principal</h1>
    
        <form action="/logout" method="POST">
            @csrf
            <button class="buttonmain"><h1>Sair</h1></button>
        </form>
        <hr>
        <h2>Este projeto foi feito em php utilizando o framework laravel para estudo.</h2>
        <h2>Programadores responsáveis:  (Conta do github na pasta do projeto)</h2>
        
        <a href="https://github.com/felodelta/locadora/" class="conta">-> Felipe Samuel</a>
        <a href="https://github.com/1PedroGabriel/locadora" class="conta"> -> Pedro Gabriel</a>

    </div>

</body>
<footer class="footer">
    <p>locadora de filmes &copy; 2023</p>
</footer>


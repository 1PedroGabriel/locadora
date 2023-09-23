@extends('layouts.main')

@section('title', 'adicionar filme')

@section('content')

<div id="movie-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione o filme</h1>
    <form action="/filmes" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Filme:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome do filme">
        </div>
        <div class="form-group">
            <label for="title">Genero:</label>
            <input type="text" class="form-control" id="genero" name="genero" placeholder="genero do filme">
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Filme">
    </form>
</div>
@endsection
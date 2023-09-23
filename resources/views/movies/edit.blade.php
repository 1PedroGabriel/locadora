@extends('layouts.main')

@section('title', 'editar filme')

@section('content')

<div id="movie-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: </h1>
    <form action="/filmes/update/{{ $movie->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Filme:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $movie->nome }}">
        </div>
        <div class="form-group">
            <label for="title">Genero:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ $movie->genero }}">
        </div>
        <input type="submit" class="btn btn-primary" value="editar Filme">
    </form>
</div>
@endsection
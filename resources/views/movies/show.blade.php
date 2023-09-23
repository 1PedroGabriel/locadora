@extends('layouts.main')

@section('title', $movie->nome)

@section('content')
<h1>{{ $movie->nome }}</h1>
<p>{{ $movie->genero }}</p>

@endsection
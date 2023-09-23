<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function home(){

        if(!Auth::check()) {
            return redirect('/login');
        }
        $movies = Movie::all();
        return view('home', ['movies' => $movies]);
    }
    public function create(){
        return view('movies.create');
    }
    public function store(Request $request){
        $movie = new Movie;
        
        $movie->nome = $request->nome;
        $movie->genero = $request->genero;
        $movie->alugado = 0;

        $movie->save();

        return redirect('/filmes');
    }

    public function filmes(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }
    public function show($id){
        $movie = Movie::findOrFail($id);
        return view('movies.show', ['movie' => $movie]);
    }
    public function destroy($id){
        Movie::findOrFail($id)->delete();
        return redirect('/filmes');
    }
    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }
    public function update(Request $request){
        Movie::findOrFail($request->id)->update($request->all());
        return redirect('/filmes');
    }
}

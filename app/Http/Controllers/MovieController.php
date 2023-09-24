<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function home(){
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

    public function alugar($id){

        $user = auth()->user();
        $movie = Movie::findOrFail($id);

        if($user->remember_token == -1 && $movie->alugado == 0){
            
            $movie->alugado = 1;
            $movie->save();
            $user->remember_token = $id;
            $user->save();

            return view('alugado');
        
        }

        return redirect('/');
    }

    public function devolver(){

        $user = auth()->user();
        if($user->remember_token != NULL){

            $movie = Movie::findOrFail($user->remember_token);
            $movie->alugado = 0;
            $movie->save();
            $user->remember_token = NULL;
            $user->save();

        }

        return redirect('/');
    }

    public function filmes(){
        
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

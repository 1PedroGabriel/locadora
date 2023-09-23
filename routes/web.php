<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;


Route::get('/', [MovieController::class, 'home']);
Route::get('/filmes/create', [MovieController::class, 'create']);
Route::get('/filmes/{id}', [MovieController::class, 'show']);
Route::post('/filmes', [MovieController::class, 'store']);
Route::delete('/filmes/{id}', [MovieController::class, 'destroy']);
Route::get('/filmes/edit/{id}', [MovieController::class, 'edit']);
Route::get('/filmes/', [MovieController::class, 'filmes']);
Route::put('/filmes/update/{id}', [MovieController::class, 'update']);

// 
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/cadastro', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/gotore', [UserController::class, 'gotore']);



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/encomendar', function () {
    return view('encomendar');
});

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/salvarcadastro', [HomeController::class,"salvar"]);
Route::get('/listagem', [HomeController::class,"lista"]);
Route::get('/excluir/{id}', [HomeController::class,"excluir"]);
Route::get('/alterar/{id}', [HomeController::class,"alterar"]);
Route::get('/alterar/{id}/confirmar', [HomeController::class,"confirmar"]);


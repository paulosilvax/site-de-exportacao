<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/contato', function () {
    return view('app.contato');
})->name('contato');

Route::get('/sobre-nos', function () {
    return view('app.sobre-nos');
})->name('sobre-nos');

*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit'); 
Route::get('/sobre-nos', [SobreController::class, 'sobreNos'])->name('sobre-nos');
Route::get('/produtos', [ProdutosController::class, 'produto'])->name('produto');
Route::resource('categorias', CategoriaController::class);

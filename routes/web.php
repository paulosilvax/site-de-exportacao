<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', [ContatoController::class, 'contato']);
Route::post('contato', [ContatoController::class, 'enviarFormulario']);

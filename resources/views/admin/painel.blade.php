@extends('layouts.app')

@section('title')
    <title>Painel ADM</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/painel-adm.css')}}">    
@endsection

@section('body')
    <div class="painel-adm">
        <div class="secao">
            <h2>Cadastrar</h2>
            <div class="botao-container">
                <a class="botao botao-primary" href="{{route('categorias.create')}}">Cadastrar Categoria</a>
                <a class="botao botao-primary" href="{{route('produtos.create')}}">Cadastrar Produto</a>
            </div>
        </div>
        
        <div class="secao">
            <h2>Exibir</h2>
            <div class="botao-container">
                <a class="botao botao-primary" href="{{route('produtos.index')}}">Ver Estoque</a>
                <a class="botao botao-primary" href="{{route('categorias.index')}}">Ver Categorias</a>
            </div>
        </div>
    </div>
@endsection

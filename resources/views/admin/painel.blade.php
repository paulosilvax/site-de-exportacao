@extends('layouts.app')

@section('title')
    <title>Painel ADM</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/painel-adm.css')}}">    
@endsection

@section('body')
    <p class="tex">Cadastrar</p>
    <a class="btn btn-primary" href="{{route('categorias.create')}}">Categorias</a>
    <a class="btn btn-primary" href="{{route('produtos.create')}}">Produtos</a><br><br><br>
    <p class="tex">Exibir</p>
    <a class="btn btn-primary" href="{{route('produtos.index')}}">Estoque</a>
    <a class="btn btn-primary" href="{{route('categorias.index')}}">Categorias</a>
@endsection

@section('js')
    <script>
        console.log("Estou na página Painel ADM");
    </script>
@endsection

@extends('layouts.app')

@section('title')
    <title>Painel ADM</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/painel-adm.css')}}">    
@endsection

@section('body')
    <a class="btn btn-primary" href="{{route('categorias.create')}}">Categorias</a>
    <a class="btn btn-primary" href="{{route('produtos.create')}}">Produtos</a>
@endsection

@section('js')
    <script>
        console.log("Estou na página Painel ADM");
    </script>
@endsection

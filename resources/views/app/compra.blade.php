@extends('layouts.app')

@section('title')
    <title>Compra do Produto</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/produto.css') }}">    
@endsection

@section('body')
    <div class="produto-details-container">
        <div class="produto-details">
            <img src="{{ asset('storage/produtos/'.$produto->img_url) }}" alt="Imagem do Produto" class="produto-img">
            <div class="produto-info">
                <h2>{{ $produto->nome }}</h2>
                <p class="preco">Preço: R$ {{ $produto->preco }}</p>
                <p class="descricao">Descrição: {{ $produto->descricao }}</p>
                <form action="/carrinho/adicionar/{{ $produto->id }}" method="POST">
                    @csrf
                    <button type="submit" class="comprar-btn">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de Compra do Produto");
    </script>
@endsection

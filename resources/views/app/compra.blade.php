@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">    
@endsection

@section('body')
    <div class="">
    
                <img src="{{asset('storage/produtos/'.$produto->img_url)}}" alt="Monalisa chapada">
                <p>{{$produto->nome}}</p>
                <p>R$ {{$produto->preco}}</p>
                <a href="{{route('produtos.show',['produto'=>$produto->id])}}">Ver Mais</a>
            
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página Home");
    </script>
@endsection

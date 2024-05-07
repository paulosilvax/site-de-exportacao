@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
    <style>
        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px; /* Adicionando margem em vez de margem inferior */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        .card p {
            margin-top: 10px;
        }
    </style>
@endsection

@section('body')
    <div class="card-container">
        <div class="card">
            <img src="{{asset('src/monalisa.jpg')}}" alt="Monalisa chapada">
            <p>Monalisa: Obra de arte de Leonardo DaVinci</p>
        </div>
        <div class="card">
            <img src="{{asset('src/cachorro.jpg')}}" alt="Cachorro cacheado">
            <p>Cachorro Cacheado: Obra autoral</p>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página Home");
    </script>
@endsection

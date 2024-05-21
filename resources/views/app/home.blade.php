@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">    
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

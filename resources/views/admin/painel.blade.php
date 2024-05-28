@extends('layouts.app')

@section('title')
    <title>Painel ADM</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/painel-adm.css')}}">    
@endsection

@section('body')
    <a href="{{route('categorias.create')}}">Categorias</a>
@endsection

@section('js')
    <script>
        console.log("Estou na página Painel ADM");
    </script>
@endsection

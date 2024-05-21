@extends('layouts.app')

@section('title')
    <title>Sobre-Nós</title>
@endsection

@section('css')

@endsection

@section('body')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    O que fazemos
                </div>
                <div class="card-body">
                    <p>Venda de Obra de arte</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Como fazemos
                </div>
                <div class="card-body">
                    <p>Vendemos obras de arte para todos os públicos!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Grupo
                </div>
                <div class="card-body">
                    <p>II:</p>
                    <p>Gabriel Gouveia dos Santos, Paulo Cardoso Silva e Wendel Mendes Rodrigues</p>
                    <p>ADM:</p>
                    <p>Não definido!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Produtos
                </div>
                <div class="card-body">
                    <p>Obras de Arte, de todos os gostos!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        console.log("Estou na página Sobre-Nós");
    </script>
@endsection
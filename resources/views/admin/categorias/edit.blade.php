@extends('layouts.app')

@section('title')
    <title>Categorias</title>
@endsection

@section('css')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col"></div>
        <div class="col-4">
            <form action="{{route('categorias.edit')}}" method="post" class="mb-5 mt-5">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Digite seu nome">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea rows="3" class="form-control" name="descricao"></textarea>
                </div>
                <button type="submit" class="form-control btn btn-outline-success " value="enviar">Enviar</button>
            </form>
        </div>
        <div class="col"></div>
   </div>
</div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de categorias");
    </script>
@endsection
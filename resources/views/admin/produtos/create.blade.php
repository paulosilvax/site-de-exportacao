@extends('layouts.app')

@section('title')
    <title>Produtos</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/painel-adm.css')}}">        
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-4">
                <form action="{{route('produtos.store')}}" method="post" class="mb-5 mt-5">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                        <select name="categoria" id="">
                            @forelse ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @empty
                                <option value="">Sem categorias</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea rows="3" class="form-control" name="descricao"></textarea>
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
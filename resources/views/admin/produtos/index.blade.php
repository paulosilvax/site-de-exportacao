@extends('layouts.app')

@section('title')

    <title>Produtos</title>

@endsection

@section('css')
    
@endsection

@section('body')
    <div class="row">
        <div class="col"></div>
            <div>
                <table>
                    <thead>
                        <th>#ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>imagem</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        @forelse ($produtos as $produto)
                       
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>{{$produto->preco}}</td>
                                <td><img src="{{ asset('storage/produtos/' . $produto->img_url) }}" width="100" height="100"></td>
                                <td>{{$produto->categoria?->nome}}</td>
                                <td>
                                    <form action="{{route('produtos.destroy', ['produto' => $produto->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="deletar">
                                    </form>
                                </td>
                            </tr>    
                        @empty
                            <tr>
                                <td>Sem produtos cadastrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        <div class="col"></div>
    </div>

@endsection
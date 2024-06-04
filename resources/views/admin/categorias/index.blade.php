@extends('layouts.app')

@section('title')

    <title>Categoria</title>

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
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        @forelse ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->nome}}</td>
                                <td>{{$categoria->descricao}}</td>
                                <td>
                                    <form action="{{route('categorias.destroy', ['categoria' => $categoria->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="deletar">
                                    </form>
                                </td>
                            </tr>    
                        @empty
                            <tr>
                                <td>Sem categorias cadastradas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        <div class="col"></div>
    </div>

@endsection
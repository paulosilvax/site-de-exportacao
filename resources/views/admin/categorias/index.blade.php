@extends('layouts.app')

@section('title')

    <title>Contato</title>

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
                    </thead>
                    <tbody>
                        @forelse ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->nome}}</td>
                                <td>{{$categoria->descricao}}</td>
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
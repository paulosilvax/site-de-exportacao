@extends('layouts.app')

@section('title')
    <title>Contato</title>
@endsection

@section('css')
    
@endsection

@section('body')
   <div class="row">
    <div class="col"></div>
        <div class="col">
            <form action="{{route('contato.submit')}}" method="post" class="mb-5 mt-5">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="nome@exemplo.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Assunto</label>
                    <select name="subject" class="form-control">
                        <option value="">Selecione uma opção</option>
                        <option value="vendas">Venda</option>
                        <option value="entregas">Entregas</option>
                        <option value="s & r">Sugestões e Reclamações</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea rows="3" class="form-control" name="message"></textarea>
                </div>
                <button type="submit" class="form-control btn btn-outline-success " value="enviar">Enviar</button>
            </form>
        </div>
    <div class="col"></div>
   </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de contatos");
    </script>
@endsection
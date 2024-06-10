@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">    
@endsection

@section('body')
    <div class="card-container">
        <div class="mvv-container">
            <div class="mvv-box missao">
                <p class="mvv-title">Missão:</p>
                <p class="mvv-text">Nosso objetivo é criar e fornecer quadros que inspirem, embelezem e tragam significado aos espaços. Buscamos oferecer produtos de alta qualidade e estilo para nossos clientes, contribuindo para a transformação de ambientes em locais inspiradores e acolhedores.</p>
            </div>
            <div class="mvv-box visao">
                <p class="mvv-title">Visão:</p>
                <p class="mvv-text">Buscamos ser reconhecidos como líderes no mercado de quadros, sendo uma fonte confiável. Almejamos expandir nossa presença global, impactando positivamente a vida das pessoas ao oferecer produtos que transformem os espaços com a criatividade, qualidade e inovação. Nossa visão é ser referência em design, sustentabilidade e compromisso com a satisfação do cliente.</p>
            </div>
            <div class="mvv-box valores">
                <p class="mvv-title">Valores:</p>
                <p class="mvv-text">Os valores da nossa empresa são a criatividade, inovação, a qualidade e excelência na produção, a sustentabilidade em toda a cadeia de suprimentos, a valorização da expressão artística, o atendimento ao cliente personalizado e a responsabilidade social.</p>
            </div>
        </div>

        @forelse ($produtos as $produto)
        
            <div class="card">
                <img src="{{asset('storage/produtos/'.$produto->img_url)}}" >
                <p>{{$produto->nome}}</p>
                <p class="preco"><b>R$</b> {{$produto->preco}}</p>
                <div class="botom">
                <a href="{{route('produtos.show',['produto'=>$produto->id])}}">Ver Mais</a>
                </div>
            </div>
        

        @empty
        <p class="">sem itens</p>

    @endforelse
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página Home");
    </script>
@endsection 
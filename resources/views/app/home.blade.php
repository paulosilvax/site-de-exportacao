@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">    
@endsection

@section('body')
    <div class="card-container">
    <div class="mvv">
        <p class="Missão">Missão: Nosso objetivo é criar e fornecer quadros que inspirem, embelezem e tragam significado aos espaços. Buscamos oferecer produtos de alta qualidade e estilo para nossos clientes, contribuindo para a transformação de ambientes em locais inspiradores e acolhedores.</p>
        <p class="Visão">Visão: Buscamos ser reconhecidos como líderes no mercado de quadros, sendo uma fonte confiável. Almejamos expandir nossa presença global, impactando positivamente a vida das pessoas ao oferecer produtos que transformem os espaços com a criatividade, qualidade e inovação. Nossa visão é ser referência em design, sustentabilidade e compromisso com a satisfação do cliente.</p>
        <p class="Valores">Valores: Os valores da nossa empresa são a criatividade, inovação, a qualidade e excelência na produção, a sustentabilidade em toda a cadeia de suprimentos, a valorização da expressão artística, o atendimento ao cliente personalizado e a responsabilidade social.</p>
</div>

    @forelse ($produtos as $produto)
        
            <div class="card">
                <img src="{{asset('storage/produtos'.$produto->img_url)}}">
                <p>{{$produto->nome}}</p>
                <p>R$ {{$produto->preco}}</p>
                <a href="{{route('produtos.show',['produto'=>$produto->id])}}">Ver Mais</a>
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

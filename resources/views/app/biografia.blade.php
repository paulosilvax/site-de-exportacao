@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">    
@endsection

@section('body')
    <div class="">
    <b>Biografia de Anita Malfatti</b><br>
Anita Catarina Malfatti nasceu em 1889, em São Paulo, Brasil, e foi uma pintora e desenhista brasileira. Ela foi uma das figuras centrais do movimento modernista brasileiro, que emergiu nas primeiras décadas do século XX. Malfatti estudou arte nos Estados Unidos e na Europa, absorvendo influências de diferentes estilos e técnicas. Sua exposição em São Paulo, em 1917, causou grande polêmica e debate na sociedade brasileira da época, sendo tanto criticada quanto elogiada por sua abordagem inovadora e expressionista. Apesar das críticas iniciais, o impacto de suas obras foi fundamental para o desenvolvimento da arte moderna no Brasil. Ao longo de sua carreira, Malfatti continuou a produzir arte diversificada e a contribuir para o cenário artístico brasileiro até sua morte em 1964.
<br><br>
<b>BIOGRAFIA TARSILA AMARAL</b><br>
Tarsila do Amaral foi uma renomada pintora e figura central do movimento modernista brasileiro. Ela nasceu em 1886 em Capivari, no estado de São Paulo, e faleceu em 1973 na capital paulista.
Tarsila do Amaral é conhecida por suas obras icônicas que capturam a essência e as cores vibrantes do Brasil, muitas vezes retratando paisagens e figuras de forma estilizada e simbólica. Ela desafiou as convenções artísticas da época, buscando inspiração na cultura popular brasileira, na natureza exuberante e nas transformações sociais e culturais que ocorriam no país.
<br><br>

    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página Home");
    </script>
@endsection

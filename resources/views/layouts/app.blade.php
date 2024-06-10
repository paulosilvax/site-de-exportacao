<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-8">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">DiversArs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('produto')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sobre-nos')}}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contato')}}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('biografia')}}">Biografias</a>
                </li>
                <li class="nav-item">
                    @auth
                        <a href="{{route('painel')}}" method="post">
                            @csrf
                            <input type="submit" value="Painel">
                        </a>
                    @else
                        
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
                    @else 
                        
                    <a class="nav-link" id="hook" href="{{route('login')}}">Login</a>
                       
                    @endauth
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    
    @yield('body')

    <footer>
        <div class="footer-bg pt-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="dl-btn">
                            <div class="mt-2">
                                <img src="{{asset('src/logo.jpg')}}" alt="Logo do site" class="logo footer-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-30"><a href="{{route('home')}}" aria-current="page">Home</a></li>
                            <li id="menu-item-1798" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1798"><a href="#">Produtos</a></li>
                            <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="{{route('sobre-nos')}}">Sobre</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-64"><a rel="privacy-policy" href="#">Política de Privacidade</a></li>
                            <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="{{route('contato')}}">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <li>Repositório do Projeto</li>
                        </ul>
                        <div class="mt-2">
                            <a target="_blank" href="https://github.com/paulosilvax/site-de-exportacao" rel="nofollow">
                                <img src="{{asset('src/github.png')}}" class="github" href="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <p class="footer-bottom">© 2024 DiversArs. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('js')
</body>
</html>
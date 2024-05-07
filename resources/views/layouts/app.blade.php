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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-primary-subtle">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Site de Exportação</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sobre-nos')}}">Sobre-Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contato')}}">Contato</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
        @yield('body')
    </div>

    <footer class="footer fixed-bottom py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Este é o footer!</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('js')
</body>
</html>
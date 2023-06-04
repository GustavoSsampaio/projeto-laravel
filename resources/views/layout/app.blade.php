<!--Este é o nosso layout -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <!--CSS DO CARRINHO-->
    <link rel="stylesheet" type="text/css" href="/css/carrinho.css">
    <!--Link das Imagens.css-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--Link das Fontes.css-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Echo</title>
</head>
<body>
    <header>
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <ul class="menu__box">
          <li><a class="menu__item" href="http://127.0.0.1:8000/produto/1">Instrumentos</a></li>
          <li><a class="menu__item" href="#contato">Contatos</a></li>
        </ul>
      </div>

        <a href="http://127.0.0.1:8000/" class="logo">
           <img src="/imagens/Logo.png" class="logoImg">
           <span>Echo</span>
        </a>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="ri-search-fill"></i></button>
        </form>

        <div class="main">
            @auth
            <a href="#" class="user"><i class="ri-user-fill"></i>{{Auth::user()->USUARIO_NOME}}</a>
            <a href="/carrinho" class="car"><i class="ri-shopping-cart-fill"></i>Meu carrinho</a>
            @endauth
            @guest
            <a href="/login" class="user"><i class="ri-user-fill"></i>logar</a>
            @endguest
            <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            sair
                        </a>
                    </form>
        </div>


    </header>

    <main>
  @yield('main')
    </main>

    <footer class="foot">
            <p id=#contato>Contatos</p>
                <ul>
                    <li><i class="ri-whatsapp-fill"></i> (11)93271-2274</li>
                    <li><i class="ri-instagram-line"></i> @Echo_Instrumentos</li>
                    <li><i class="ri-map-pin-line"></i> Rua José Bonifacio - Jd.Mirante</li>
                </ul>
    </footer>
</body>
    <script type="text/JavaScript" src="/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


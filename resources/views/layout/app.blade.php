<!--Este é o nosso layout -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
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
          <li><a class="menu__item" href="produto.html">Instrumentos</a></li>
          <li><a class="menu__item" href="#">Som</a></li>
          <li><a class="menu__item" href="#">itens</a></li>
          <li><a class="menu__item" href="#">Sobre Nós</a></li>
          <li><a class="menu__item" href="#">Contatos</a></li>
        </ul>
      </div>

        <a href="#" class="logo">
           <img src="../imagens/Logo_Echo-removebg-preview_-_Editado-removebg-preview.png" class="logoImg">
           <span>Echo</span>
        </a>
        
        <div class="main">
            <a href="#" class="user"><i class="ri-user-fill"></i>Sing In</a>
            <a href="#">Registrar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="ri-search-fill"></i></button>
        </form>
    </header>
        
    <footer>

    </footer>
    <script type="text/JavaScript" src="/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
        

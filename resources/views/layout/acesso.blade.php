<!-- AQUI FAREMOS NOSSO LAYOUT PARA LOGIN E REGISTRO -->
<!--Este é o nosso layout -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/acesso.css">
    <!--Link das Imagens.css-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--Link das Fontes.css-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Echo</title>
</head>
<body>
    <header>
        <a href="http://127.0.0.1:8000/" class="logo">
           <img src="/imagens/Logo.png" class="logoImg">
           <span>Echo</span>
        </a>

        <div class="main">
            <a href="#" class="user"><i class="ri-user-fill"></i></a>
        </div>
    </header>

    <main>
  @yield('main')
    </main>

    <footer class="foot">
            <p>Contatos</p>
                <ul>
                    <li><i class="ri-whatsapp-fill"></i> (11)93271-2274</li>
                    <li><i class="ri-instagram-line"></i> @Echo_Instrumentos</li>
                    <li><i class="ri-map-pin-line"></i> Rua José Bonifacio - Jd.Mirante</li>
                </ul>
    </footer>
</body>
    <script type="text/JavaScript" src="/js/acesso.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


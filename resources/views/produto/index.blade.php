<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="/produto.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <header>
        <button class="btnReturn"><i class="ri-reply-line" href="home.html"></i></button>

        <a href="home.html" class="logo">
            <img src="../imagens/Logo_Echo-removebg-preview_-_Editado-removebg-preview.png" class="logoImg">
         </a>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="ri-search-fill"></i></button>
          </form>

    </header>
    <main>
        <section>
            <div class="produtoImg">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">

                    @if(count($produto->ProdutoImagem) > 0)

                    <div class="carousel-item active">
                        <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="d-block w-100" id="itemImg" alt="..." width="600px" height="500px" style="border-radius:20px;">
                    </div>
                    @else
                        <img class="card-img-top w-auto" src="">
                    @endif

                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
            </div>

        <!--
        <div class="miniCarousel">
            <div>
                <img src="https://images.unsplash.com/photo-1612225330812-01a9c6b355ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="produtoImg">
            </div>
        -->

            <div class="descProd">
                <h1 class="tytle">{{$produtos->PRODUTO_NOME}}</h1>
                <br>
                <h2>Descrição: </h2>
                <p>{{$produto->PRODUTO_DESC}}</p>
                <h2>Preço: </h2>
                <p>R${{$produto->PRODUTO_PRECO}}</p>
                <h2>Desconto: </h2>
                <p>R${{$produto->PRODUTO_DESCONTO}}</p>

                <input type="number" name="qty" id="qty" maxlength="12" value="1" title="Qtd" class="input-text qty" data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}">
                <br>
                <br>
                <button class="carrinho"><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho!</button>

            </div>
        </sectio>
        <section class="maisProd">
            <h1 class="um">Mais Produtos !</h1>


        <br><br><br><br>
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img class="w-50" src="../imagens/510681.PNG">
                <div class="card_content">
                    <h2 class="card_title">Guitarra Yamaha</h2>
                <p class="card_text">guitarra stratocaster para intermediarios </p>
                <a href="#" target="_blank"><button class="btn card_btn">Saiba mais</button></a>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img class="w-50" src="../imagens/guitarraPreta.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Guitarra Yamaha</h2>
                <p class="card_text">guitarra boa para quem está começando com o instrumento </p>
                <a href="prod2.html" target="_blank"><button class="btn card_btn">Saiba mais</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img class="w-75" src="../imagens/violao-acustico-michael-antares-vm19e_241b.png"></div>
              <div class="card_content">
                <h2 class="card_title">Arraial do Cabo</h2>
                <p class="card_text">Rio de Janeiro</p>
                <a href="#" target="_blank"><button class="btn card_btn">Saiba mais</button></a>
              </div>
            </div>
          </li>
        </section>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

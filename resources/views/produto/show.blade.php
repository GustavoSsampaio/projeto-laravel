<!-- Este é o nosso main Produto -->
@extends('layout.app')
@section('main')
<!--Carrosel de imagens do produto-->
<link rel="stylesheet" type="text/css" href="/css/produto.css">
  <main class="mainShow">
    <section>
      <div class="produtoImg">
        <div id="carouselExampleFade" class="carousel slide carousel-fade prim">
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

        <div class="descProd">
                <h1 class="tytle">{{$produto->PRODUTO_NOME}}</h1>
                <br>
                <h2>Descrição: </h2>{{$produto->PRODUTO_DESC}}
                <h2>Preço: </h2>R${{$produto->PRODUTO_PRECO}}
                <h2>Desconto: </h2>
                <p>R${{$produto->PRODUTO_DESCONTO}}</p>
                <p>Quantidade disponivel:</p>
                <input type="number" name="qty" id="qty" maxlength="12" value="1" title="Qtd" class="input-text qty" data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}">
                <br>
                <br>
                <!--é um "if" para ver se tá logado, se sim add no carrinho, se n (else) retorna pra pagina de login-->
                @auth
                    <!--ADICIONAR FUNÇÃO PARA REQUISIÇÃO DE PRODUTOS e ADD AO CARRINHO-->
                    <form method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
                    @csrf
                    <label for="">Adicionar quantidade</label>
                    <input type="number" name="ITEM_QTD" min="1" value="1">

                    <button class="carrinho" ><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho!</button>
                </form>
                @endauth
                @guest
                    <!--Quando clicar vai para login-->
                    <a href="/login"><button class="carrinho"><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho</button></a>

                @endguest
                <!--leva para tela de finalizar compra-->
                <a href="/pedido"><button class="comprar"><i class="ri-shopping-bag-3-fill"></i>Vou levar!</button></a>
        </div>
    </section>

        <section class="maisProd">
            <div class="AlertProduto">
                <hr style="color: black;">
                <h2 class="text-center">PRODUTOS</h2>
                <hr style="color: black;">
            </div>
        <br><br>
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img class="w-50" src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}">
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
                <h2 class="card_title">Bateria Acustica Rmv</h2>
                <p class="card_text">Rmv Cross Bumbo 20'' Ferragens Pratos Banco</p>
                <a href="#" target="_blank"><button class="btn card_btn">Saiba mais</button></a>
              </div>
            </div>
          </li>
  </section>
</main>
@endsection



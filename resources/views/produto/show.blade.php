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
                <br>
                <br>
                <!--é um "if" para ver se tá logado, se sim add no carrinho, se n (else) retorna pra pagina de login-->
                @auth
                    <!--ADICIONAR FUNÇÃO PARA REQUISIÇÃO DE PRODUTOS e ADD AO CARRINHO-->
                    <form method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
                    @csrf
                    <label for="">Adicionar quantidade:</label><br>
                    <input type="number" name="ITEM_QTD" min="1" value="1">

                    <button class="carrinho" ><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho!</button> <br>
                </form>
                @endauth
                @guest
                    <!--Quando clicar vai para login-->
                    <a href="/login"><button class="carrinho"><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho</button></a>

                @endguest
                <!--leva para tela de finalizar compra-->

        </div>
    </section>

</main>
@endsection



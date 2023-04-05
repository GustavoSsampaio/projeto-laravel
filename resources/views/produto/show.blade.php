<!-- Este é o nosso main Produto -->
@extends('layout.app')
@section('main')
<!--Carrosel de imagens do produto-->
<link rel="stylesheet" type="text/css" href="/css/produto.css">
  <main>
    <section>
      <div class="produtoImg">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://hpgmusical.com/media/catalog/product/cache/788f13bf9e20f9323792a5c317a62683/v/i/violino-alemao-antigo-n203-_0_.jpg" class="d-block w-100" id="itemImg" alt="..." width="600px" height="500px" style="border-radius:20px;">
                </div>
                <div class="carousel-item">
                    <img src="https://hpgmusical.com/media/catalog/product/cache/788f13bf9e20f9323792a5c317a62683/v/i/violino-alemao-antigo-n203-_01_.jpg" class="d-block w-100" id="itemImg" alt="..." width="600px" height="500px" style="border-radius:20px;">
                  </div>
                  <div class="carousel-item">
                    <img src="https://hpgmusical.com/media/catalog/product/cache/788f13bf9e20f9323792a5c317a62683/v/i/violino-alemao-antigo-n203-_03_.jpg" class="d-block w-100" id="itemImg" alt="..." width="600px" height="500px" style="border-radius:20px;">
                  </div>
                  <div class="carousel-item">
                    <img src="https://hpgmusical.com/media/catalog/product/cache/788f13bf9e20f9323792a5c317a62683/v/i/violino-alemao-antigo-n203-_05_.jpg" class="d-block w-100" alt="..." width="600px" height="500px" style="border-radius:20px;">
                  </div>
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
                <h1 class="tytle">Violino Yamaha</h1>
                <br>
                <h2>Descrição: </h2>
                <p>Violino antigo, que pelos padrões de construção, estimamos ter sido construído em oficina ou fábrica Alemã, na primeira metade do século XX. Violino em bom estado de conservação, construído em Acero e Abeto e finalizado com verniz natural. Indicado para estudantes intermediários e avançados ou violinistas que desejam um instrumento antigo com preço mais acessível.</p>
                <h2>Preço: </h2>
                <p>R$1000,00</p>
                <h2>Desconto: </h2>
                <p>R$20,00</p>
                <p>Quantidade:</p>
                <input type="number" name="qty" id="qty" maxlength="12" value="1" title="Qtd" class="input-text qty" data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}">
                <br>
                <br>
                <button class="carrinho"><i class="ri-shopping-cart-2-line"></i>Adicionar ao carrinho!</button>

            </div>
        </sectio>
        <section class="maisProd">
            <h1 class="um">Mais Produtos</h1>
        

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
   @endsection
    


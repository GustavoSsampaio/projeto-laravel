<!--                                                                           HOMEPAGE                                                                                             -->
<!--cria uma extensão para puxar o conteudo da pagina layout.app-->
@extends('layout.app')
@section('main')
<!--Carrosel de imagens do menu-->
<div class="carousel slide" id="carouselExampleIndicators" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1516924962500-2b4b3b99ea02?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="...">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1543443374-b6fe10a6ab7b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="...">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1673042872461-674af7154d3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Titulo para produto e a linha horizontal para separar-->
<br>
<div class="AlertProduto">
<hr style="color: black;">
<h2 class="text-center">PRODUTOS</h2>
<hr style="color: black;">
</div>
<br><br><br><br><br><br>

<!--Card dos produtos-->
<div class="row">
  <!--foreach para puxar o conteudo da pasta app\models e após isso ::all para pegar todo o conteudo da pasta produto, o take(5) para pegar 5 produtos e o "as $produto" para pegar de produto-->
  @foreach(\App\Models\Produto::all()->take(8) as $produto)
  <div class="card ms-5 " style="width: 18rem;">
  <!-- if onde ele vai contar para ver se em $produto->ProdutoImagem há mais de 0 elementos adicionados, se sim ele irá puxar do banco a URL e colocr a imagem no card, e se nao houver, colocará uma imagem genérica-->
    @if(count($produto->ProdutoImagem) > 0)
      <img class="card-img-top w-auto" src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}">
    @else
      <img class="card-img-top w-auto" src="">
    @endif
  <div class="card-body">
    <h5 class="card-title text-black">{{$produto->PRODUTO_NOME}}</h5>
    <h5 class="card-title text-black">{{$produto->PRODUTO_PRECO}}</h5>
    <a class="menu__item" href="{{route('produto.show', $produto->PRODUTO_ID)}}">Conferir</a>

  </div>
</div>

<!--finaliza o foreach-->
@endforeach
@endsection

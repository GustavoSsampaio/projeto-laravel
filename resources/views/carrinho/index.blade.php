@extends('layout.app')
<main class="macaco">

<div class="row">
  <!--foreach para puxar o conteudo da pasta app\models e após isso ::all para pegar todo o conteudo da pasta produto, o take(5) para pegar 5 produtos e o "as $produto" para pegar de produto (MUDAR CAMINHO PARA ID DOS PRODUTOSCARRINHO)-->
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



{{$carrinho}}
{{ $carrinho[0]->Produto->PRODUTO_NOME}}
</main>

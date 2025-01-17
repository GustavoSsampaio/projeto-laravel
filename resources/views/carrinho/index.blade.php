<!--NOSSA TELA DO CARRINHO-->

@extends('layout.app')
<script>
  function finalizar(){
    window.alert('Seu pedido foi confrimado!');
  }
</script>
<section class="h-100 h-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div id="carCard" class="col-lg-8">
                    <div class="p-5">
                      <div class="d-flex justify-content-between mb-5">
                        <h1 class="fw-bold mb-0 text-black">Carrinho</h1>
                        <h6 class="mb-0 text-muted"><!--aqui vai a contagem dos itens--> </h6>
                      </div>
                      <hr class="my-4">
                    @foreach($carrinho as $item)

                @csrf
                @if($item->ITEM_QTD>0)
                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">{{$item->Produto->PRODUTO_NOME}}</h6>
                          <h6 class="text-black mb-0">{{$item->Produto->PRODUTO_DESC}}</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button id="menosUm"class="btn btn-link"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            -
                          </button>


                          <input id="form1" min="1" name="quantity" value="{{$item -> ITEM_QTD}}" type="number"
                            class="form-control form-control-sm">


                          <button id="maisUm"class="btn btn-link"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            +
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">

                        <!--Multiplica valor pela qntdd de itens-->

                        <h6 class="mb-0">R${{$item->Produto->PRODUTO_PRECO * $item-> ITEM_QTD}}</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                      <hr class="my-4">
                    @endif
                  @endforeach

                  <div class="col-lg-6 bg-grey">
                    <div class="p-5">
                      <h3 class="fw-bold mb-5 mt-2 pt-1">Carteira</h3>
                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-4">
                        <h5 class="text-uppercase">Desconto: </h5>
                        <?php
                            $desconto = 0;
                        ?>
                        <div id="invisivel">
                        @foreach($carrinho as $item)
                        <?php
                        $desconto+= $item->Produto->PRODUTO_DESCONTO * $item-> ITEM_QTD ?>
                        @endforeach
                        </div>
                        <h5>R${{$desconto}}</h5>
                      </div>



                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-5">
                        <h5 class="text-uppercase">Total: </h5>
                        <?php
                            $preco= 0;
                        ?>
                        <div id="invisivel">
                        @foreach($carrinho as $item)
                          @if($item->ITEM_QTD>0)
                          <?php
                          $preco+=($item->Produto->PRODUTO_PRECO*$item->ITEM_QTD)-$desconto ?>
                          @endif
                        @endforeach
                        </div>
                        <h5>R${{$preco}}</h5>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                      <a href="/"> <button class="rtrnBtn">Voltar às compras</button></a>
                      </div>
                     <form action="{{route('pedido.checkout')}}"  method="POST">
                      @csrf
                      <button type="submit" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark" onclick="finalizar()">Finalizar</button></form>
                </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

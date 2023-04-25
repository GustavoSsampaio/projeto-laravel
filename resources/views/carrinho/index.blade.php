@extends('layout.app')
<main class="macaco">
<section class="ghost">

</section>

{{$carrinho}}
{{ $carrinho[0]->Produto->PRODUTO_NOME}}
</main>

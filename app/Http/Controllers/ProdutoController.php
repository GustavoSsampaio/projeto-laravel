<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;


class ProdutoController extends Controller
{
    public function index(){
     return view('produto.index')->with('produtos', Produto::all());
    }

    // public function show(Produto $produto){
    //     return view('produto.show')->with('produto', $produto);
    // }
    public function show(Produto $produto){ // model e variavel
        // dd($produto);
        // retorna só um produto
         //return view('produto.show')->with('produto',$produto);
         $maisProdutos = Categoria::find($produto->CATEGORIA_ID)->Produtos;
         return view ('produto.show', ['produto' =>$produto,'maisProdutos' => $maisProdutos]);

       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){
     return view('produto.index')->with('produtos', Produto::all());
    }

    public function show(Produto $produto){
        return view('produto.show')->with('produto', $produto);
    }
}

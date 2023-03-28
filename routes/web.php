<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

Route:: get('/produto', [ProdutoController::class, 'index']);
Route:: get('/produto/{produto}', [ProdutoController::class, 'show']);
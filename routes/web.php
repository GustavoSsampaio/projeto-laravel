<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;
use App\http\Controllers\CarrinhoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/carrinho',[CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho', [CarrinhoController::class, 'store']);
Route::post('/carrinho/{produto}',[CarrinhoController::class,'store'])->name('carrinho.store');


Route::get('/produto', [ProdutoController::class, 'index']);
// Route::get('/produto/{id}', [ProdutoController::class, 'show']);

Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor, será produto/1

Route::get('/dashboard', function () {
    return redirect(route('home'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

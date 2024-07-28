<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('listagem');


Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');


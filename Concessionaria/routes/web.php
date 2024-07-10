<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'home'])->name('home');

Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');

Route::get('/catalogo/filtrar', [CatalogoController::class, 'filtrarPorTipo'])->name('catalogo.filtrar');

Route::get('/contatos/enviar', [PaginaController::class, 'enviarContato'])->name('contatos.enviar');

Route::get('/contatos', function () {
    return view('contatos');
})->name('contatos');

Route::get('/veiculos', function () {
    $tipo = 'carros';
    return view('veiculos')->with('tipo', $tipo);
});

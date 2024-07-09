<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/contatos', function () {
    return view('contatos');
})->name('contatos');

Route::post('/contatos/enviar', function () {
    return 'Contato enviado com sucesso!';
})->name('contatos.enviar');

Route::get('/veiculos', function () {
    $tipo = 'carros';
    return view('veiculos')->with('tipo', $tipo);
});




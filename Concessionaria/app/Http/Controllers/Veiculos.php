<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function index()
    {
        $tipo = 'carros'; // Defina o tipo de veículo desejado
        return view('veiculos')->with('tipo', $tipo);
    }
}

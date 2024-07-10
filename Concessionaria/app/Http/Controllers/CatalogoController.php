<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\TipoVeiculo;

class CatalogoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();
        $tiposVeiculos = TipoVeiculo::all();

        return view('catalogo')->with('veiculos', $veiculos)->with('tiposVeiculos', $tiposVeiculos);
    }

    public function filtrarPorTipo(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo) {
            $veiculos = Veiculo::where('tipo_veiculo_id', $tipo)->get();
        } else {
            $veiculos = Veiculo::all();
        }

        $tiposVeiculos = TipoVeiculo::all();

        return view('catalogo')->with('veiculos', $veiculos)->with('tiposVeiculos', $tiposVeiculos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric'
        ]);

        Produto::create($validateData);

        return redirect()->route('listagem')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('listagem', ['produtos' => $produtos]);
    }
}

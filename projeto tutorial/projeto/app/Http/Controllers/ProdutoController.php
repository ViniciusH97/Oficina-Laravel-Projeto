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
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        Produto::create($validatedData);

        return redirect()->route('listagem')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('listagem', compact('produtos'));
    }
}

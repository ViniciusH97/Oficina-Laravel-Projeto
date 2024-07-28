<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Cadastro de Produtos</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">Oficina Laravel</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('listagem') }}">Listagem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('produtos.create') }}">Cadastro</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Cadastro de Produtos</h1>

        @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao">{{ old('descricao') }}</textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" value="{{ old('preco') }}">
            </div>
            <button type="submit">Cadastrar Produto</button>
        </form>
    </div>
</body>
</html>
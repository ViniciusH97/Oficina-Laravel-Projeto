<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Listagem de Produtos</title>
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
        <h1>Lista de Produtos</h1>

        @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>


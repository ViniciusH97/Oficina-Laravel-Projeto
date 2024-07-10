<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Página Inicial</a></li>
            <li><a href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a></li>
        </ul>
    </nav>

    <h1>Listagem de Produtos</h1>

    @if (session('success'))
    <div>
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
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
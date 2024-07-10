<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1>Home</h1>
        <p>Oficina Framework Laravel</p>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('listagem') }}">Listagem de Produtos</a>
                </li>
                <li>
                    <a href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>
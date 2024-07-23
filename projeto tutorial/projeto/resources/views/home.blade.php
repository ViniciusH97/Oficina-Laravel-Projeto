<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Página Inicial</title>
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
        <h1 class="main-title">Oficina Laravel</h1>
    </div>

</body>

</html>

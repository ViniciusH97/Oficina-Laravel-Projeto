<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Página Inicial</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('sobre') }}">Sobre</a>
    <a href="{{ route('catalogo') }}">Catálogo</a>
    <a href="{{ route('contatos') }}">Contatos</a>
    <p>Bem-vindo à nossa concessionária!</p>
</body>
</html>

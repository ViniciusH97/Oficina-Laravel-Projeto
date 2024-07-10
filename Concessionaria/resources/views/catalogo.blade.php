<!DOCTYPE html>
<html>

<head>
    <title>Catálogo de Automóveis</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Catálogo de Automóveis</h1>

    <form action="{{ route('catalogo') }}" method="GET">
        <label for="tipo">Selecione o tipo de veículo:</label>
        <select name="tipo" id="tipo">
            <option value="carros">Carros</option>
            <option value="motos">Motos</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    @if ($tipo === 'carros')
    <h2>Carros Disponíveis</h2>
    @elseif ($tipo === 'motos')
    <h2>Motos Disponíveis</h2>
    @endif

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
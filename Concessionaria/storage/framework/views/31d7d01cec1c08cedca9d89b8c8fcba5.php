<!DOCTYPE html>
<html>

<head>
    <title>Catálogo de Automóveis</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Catálogo de Automóveis</h1>

    <form action="<?php echo e(route('catalogo')); ?>" method="GET">
        <label for="tipo">Selecione o tipo de veículo:</label>
        <select name="tipo" id="tipo">
            <option value="carros">Carros</option>
            <option value="motos">Motos</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <?php if($tipo === 'carros'): ?>
    <h2>Carros Disponíveis</h2>
    <?php elseif($tipo === 'motos'): ?>
    <h2>Motos Disponíveis</h2>
    <?php endif; ?>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\11934939609\teste\resources\views/catalogo.blade.php ENDPATH**/ ?>
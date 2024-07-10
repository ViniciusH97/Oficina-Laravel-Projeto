<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Automóveis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Catálogo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('catalogo')); ?>">Catálogo</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('catalogo.filtrar')); ?>" method="GET">
                <select class="form-control mr-sm-2" name="tipo" id="tipo">
                    <?php if(isset($tiposVeiculos)): ?>
                    <?php $__currentLoopData = $tiposVeiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tipo->id); ?>" <?php echo e(request('tipo') == $tipo->id ? 'selected' : ''); ?>>
                        <?php echo e($tipo->nome); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
            </form>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container">
        <h1>Catálogo de Automóveis</h1>

        <?php if($veiculos->isNotEmpty()): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($veiculo->marca); ?></td>
                    <td><?php echo e($veiculo->modelo); ?></td>
                    <td><?php echo e($veiculo->ano); ?></td>
                    <td><?php echo e($veiculo->cor); ?></td>
                    <td><?php echo e($veiculo->preco); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Nenhum veículo encontrado para o tipo selecionado.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH C:\Users\sspma\Desktop\Concessionaria\resources\views/catalogo.blade.php ENDPATH**/ ?>
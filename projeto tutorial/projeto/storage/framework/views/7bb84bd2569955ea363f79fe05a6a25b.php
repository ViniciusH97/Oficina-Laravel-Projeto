<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('home')); ?>">Página Inicial</a></li>
            <li><a href="<?php echo e(route('produtos.create')); ?>">Cadastrar Novo Produto</a></li>
        </ul>
    </nav>

    <h1>Listagem de Produtos</h1>

    <?php if(session('success')): ?>
    <div>
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

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
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($produto->id); ?></td>
                <td><?php echo e($produto->nome); ?></td>
                <td><?php echo e($produto->descricao); ?></td>
                <td><?php echo e($produto->preco); ?></td>
                <td><?php echo e($produto->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH C:\Users\sspma\Desktop\projeto\projeto\resources\views/listagem.blade.php ENDPATH**/ ?>
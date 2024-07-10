<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <h1>Cadastro de Produtos</h1>

    <?php if($errors->any()): ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('produtos.store')); ?>">
        <?php echo csrf_field(); ?>

        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <button type="submit">Cadastrar Produto</button>
    </form>

    <br>
    <a href="<?php echo e(route('home')); ?>">Voltar para Página inicial</a>
</body>

</html><?php /**PATH C:\Users\sspma\Desktop\projeto\projeto\resources\views/cadastro.blade.php ENDPATH**/ ?>
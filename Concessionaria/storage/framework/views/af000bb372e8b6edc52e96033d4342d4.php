<!DOCTYPE html>
<html>
<head>
    <title>Contatos - Concessionária</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <header>
        <h1>Contatos</h1>
    </header>

    <main>
        <section>
            <h2>Entre em contato conosco</h2>
            <form action="<?php echo e(route('contatos.enviar')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Concessionária. Todos os direitos reservados.</p>
    </footer>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html></section><?php /**PATH C:\Users\11934939609\teste\resources\views/contatos.blade.php ENDPATH**/ ?>
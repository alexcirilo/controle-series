<?php $__env->startSection('cabecalho'); ?>
    Entrar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <?php echo $__env->make('erros', ['errors' => $errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Entrar</button>
        <a href="/registrar" class="btn btn-secondary mt-3">Registrar-se</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Estagio\Alura\controle-serie\resources\views/entrar/index.blade.php ENDPATH**/ ?>
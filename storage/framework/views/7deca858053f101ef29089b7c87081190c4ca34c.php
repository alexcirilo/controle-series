<?php $__env->startSection('cabecalho'); ?>
    Registrar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <form method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Registrar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Estagio\Alura\controle-serie\resources\views/registro/create.blade.php ENDPATH**/ ?>
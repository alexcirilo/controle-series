<?php $__env->startSection('cabecalho'); ?>
Adicionar Série
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="" method="post">
    <?php echo csrf_field(); ?>
    <!--Token de verificação para envio formulario POST -->
    <div class="row">
        <div class="col col-8">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-2">
            <label for="temporadas">Nº Temporadas:</label>
            <input type="number" class="form-control" name="temporadas" id="temporadas">
        </div>
        <div class="col col-2">
            <label for="episodios">Nº Episódios:</label>
            <input type="number" class="form-control" name="episodios" id="episodios">
        </div>
    </div>



    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alex.cirilo\php-oo\controle-serie\resources\views/series/create.blade.php ENDPATH**/ ?>
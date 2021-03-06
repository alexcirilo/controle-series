<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="/series" class="navbar-brand">Home</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1><?php echo $__env->yieldContent('cabecalho'); ?></h1>
        </div>

        <?php echo $__env->yieldContent('conteudo'); ?>

    </div>
</body>

</html><?php /**PATH C:\Users\alex.cirilo\php-oo\controle-serie\resources\views/layout.blade.php ENDPATH**/ ?>
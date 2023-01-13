<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantilla 1</title>
</head>
<body>
  <h1><?php echo e($titulo); ?></h1>
  <p><?php echo e(time()); ?></p>
  <p><?php echo e($nombre); ?></p>
  <p><?php echo e($edad); ?> años</p>
  <?php if($edad >=18): ?>
    <p>Contenido para adultos</p>
  <?php else: ?>
    <p>Viva Bob Esponja</p>
  <?php endif; ?>
  <ul>
  <?php for($i = 0; $i < $maximo; $i++): ?>
    <li>Elemento <?php echo e($i); ?></li>    
  <?php endfor; ?>
  </ul>
  <ol>
    <?php $__currentLoopData = $aficiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aficion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($aficion); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(empty($aficiones)): ?>
            <li>No hay aficiones</li>
    <?php endif; ?>
  </ol>
  <ol>
    <?php $__empty_1 = true; $__currentLoopData = $aficiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aficion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li><?php echo e($aficion); ?>--</li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li>No hay aficiones</li>
    <?php endif; ?>
  </ol>
</body>
</html>
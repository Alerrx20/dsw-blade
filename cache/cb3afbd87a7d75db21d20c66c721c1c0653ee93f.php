<?php $__env->startSection('titulo', 'Pagina Frutas'); ?>

<?php $__env->startSection('menu'); ?>
  ##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
  <ul>
    <li><a href="#">Manzanas</a></li>
    <li><a href="#">Sandías</a></li>
  </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
  <?php $__empty_1 = true; $__currentLoopData = $frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php echo $__env->make('layouts.fruta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <?php echo $__env->make('layouts.vacio', ['elementos' => 'frutas'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <script>
    console.log('hola mundo');
    let frutas = <?php echo json_encode($frutas, JSON_PRETTY_PRINT, 512) ?>;
    console.log(frutas);
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
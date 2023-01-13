<?php $__env->startSection('titulo', 'Mi titulo'); ?>

<?php $__env->startSection('menu'); ?>
  ##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
  <ul>
    <li><a href="#">Proovedores</a></li>
    <li><a href="#">Sección2</a></li>
  </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
  <p>Hola</p>
  <p>¿que tal?</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
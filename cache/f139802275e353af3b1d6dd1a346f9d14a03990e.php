<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App Name - <?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<body>
  <h1><?php echo $__env->yieldContent('titulo'); ?></h1>
  <?php $__env->startSection('menu'); ?>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sección1</a></li>
      </ul>
  <?php echo $__env->yieldSection(); ?>

  <div>
    <?php echo $__env->yieldContent('contenido'); ?>
  </div>
</body>
</html>
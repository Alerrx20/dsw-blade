<?php
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$titulo  = "Este es el titulo";
$nombre = "Pepe Pepon";
$edad = 22;
$maximo = 3;
// $aficiones = ['PHP', 'Javascript', 'Blade'];
$aficiones = [];
echo $blade->view()->make('plantilla1', compact('titulo', 'nombre', 'edad', 'maximo', 'aficiones'))->render();
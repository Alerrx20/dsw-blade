<?php
require "../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
  'driver' => 'mysql',
  'host' => 'db',
  'database' => 'dbname',
  'username' => 'root',
  'password' => 'test',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => ''
]);
$capsule->bootEloquent();
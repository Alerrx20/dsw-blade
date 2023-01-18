<?php
require "../vendor/autoload.php";
require_once("../src/connection.php");

use Philo\Blade\Blade;
use Dsw\Blade\Person as Person;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$persons = Person::all();
foreach ($persons as $person) {
  echo "<p>" . $person->name . "</p>";
}
echo $blade->view()->make('layouts.person', compact('persons'))->render();
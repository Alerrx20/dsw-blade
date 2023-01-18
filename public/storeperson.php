<?php
require_once("../src/connection.php");

use Dsw\Blade\Person as Person;

$name = $_POST['name'];

$person = new Person();
$person->name = $name;
$person->save();
header("Location: /person.php");
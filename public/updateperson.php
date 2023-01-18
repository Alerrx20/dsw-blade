<?php
require_once("../src/connection.php");

use Dsw\Blade\Person as Person;
$id = $_GET['id'];
$name = $_POST['name'];

$person = Person::find($id);
$person->name = $name;
$person->save();
header("Location: /persons.php");
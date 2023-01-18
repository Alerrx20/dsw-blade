<?php
require_once("../src/connection.php");

use Dsw\Blade\Person as Person;

$id = $_GET["id"];
$person = Person::find($id);
echo "<h1>" . $person->id . " - " . $person->name . "</h1>";
?>
<form action="updateperson.php?id=<?=$person->id?>" method="POST">
  <input type="text" name="name" id="name" value="<?=$person->name?>">
  <input type="submit" value="Modificar">
</form>
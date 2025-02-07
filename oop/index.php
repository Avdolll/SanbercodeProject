<?php
require_once "animal.php";

$sheep = new Animal("shaun");

echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>";
?>
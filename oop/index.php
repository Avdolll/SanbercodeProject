<?php
require_once "animal.php";
require_once "Frog.php"; 
require_once "Ape.php"; 

$sheep = new Animal("shaun");

echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>"; 

$sungokong = new Ape("kera sakti");
echo $sungokong->name . "<br>"; 
echo $sungokong->legs . "<br>";
$sungokong->yell(); 

$kodok = new Frog("gamabunta");
echo $kodok->name . "<br>"; 
echo $kodok->legs . "<br>"; 
$kodok->jump();
?>
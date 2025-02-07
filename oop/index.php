<?php
require_once "animal.php"; // Menghubungkan index.php dengan animal.php

$sheep = new Animal("shaun"); // Membuat objek Sheep

echo $sheep->name . "<br>"; // Output: shaun
echo $sheep->legs . "<br>"; // Output: 4
echo $sheep->cold_blooded . "<br>"; // Output: no
?>
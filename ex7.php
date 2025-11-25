<?php
$a = 0;
$b = 10;
echo "original type of $a. ";
var_dump($a);
echo "<br>";
echo "original type of $b. ";
var_dump($b);
echo "<br>";

$a = (bool)$a;
var_dump($a);
echo "<br>";
$b = (bool)$b;
var_dump($b);
?>
<?php

//references using '&'

$x = 10;

$y = &$x;
echo "Value of x and y before the change: $y <br>";
$y =20;
echo "After change <br>";
echo "Value of x: $x <br>";
echo "Value of y: $y";



?>
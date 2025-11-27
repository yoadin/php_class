<?php

//calculate area of circle
const PI = 3.14;
function calculateArea($r){
    return PI * $r ** 2;
}

echo "Area of circle is: ". calculateArea(3);

?>
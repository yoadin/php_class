<?php
 //using references in the function

 function addFive(&$num){
    return $num += 5;
 }

 $value = 10;
 
 addFive($value);

 echo $value;

?>
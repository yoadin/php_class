<?php

//calculate average

function calculateAverage($arr){
    $count = count($arr);
    $sum = 0;
    echo $count . "<br>";
    for($i = 0; $i < $count; $i++){
        $sum += $arr[$i];
        
    }

    echo "sum: " . $sum. "<br>";

    $avg = $sum/$count;

    return $avg;
}

$arr = [9,10,5,34,89];

echo "Average: ". calculateAverage($arr);

?>
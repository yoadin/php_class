<?php
$array = [
    ["Name" => "Kalkidan", "Department" => "Software"],
    ["Name" => "Selam" , "Department" => "IS"],
    ["Name" => "Suleyman", "Department" => "Data Science"]
];

foreach($array as $arr){
    echo $arr["Name"]. " ";
    echo "Department of " .$arr["Department"]. "<br>";
}


?>
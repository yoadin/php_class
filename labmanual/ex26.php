<?php

function display($arr){
    foreach($arr as $a){
        echo "Name- ". $a["name"]. " , ";
        echo "Department- ". $a["department"]. "<br>";
    }
}

$arr = [
    ["name" => "Kalkidan Asdro", "department"=>"Software"],
    ["name" => "Kalkidan Fishea", "department" => "Software"],
    ["name" => "Kalkidan Geleta", "department" => "Computer Science"]
];

display($arr);

?>
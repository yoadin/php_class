<?php

//list of files in the directory
$dirname = "sedir";

file_put_contents("$dirname/filelab1.txt", "Kalkidan Asdro");
file_put_contents("$dirname/filelab2.txt", "Software Engineering");

$files = scandir($dirname);

echo "Files in $dirname: <br>";
foreach($files as $file){
    if($file != "." && $file !=".."){
        echo $file. "<br>";
    }
}
?>
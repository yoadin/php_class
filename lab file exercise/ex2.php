<?php

//get the content of file that is stored in the labse.txt file

$filename = "labse.txt";
//checks if the file exist or not
if(file_exists($filename)){
    //file_get_content wil retrive the content from labse.txt
    $content = file_get_contents($filename);
    echo "file Content: " . $content;
}else{
    echo "File doesn't exist";
}


?>
<?php

$dirname = "sedir";

if(is_dir($dirname)){
    $files = scandir($dirname);
    foreach($files as $file){
        if($file != "." && $file != ".."){
            unlink("$dirname/$file");
        }
    }rmdir($dirname);
    echo "Directory and it's files deleted Successfully.";
}else{
    echo "Directory not found. ";
}
?>
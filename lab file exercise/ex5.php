<?php
$dirname = "sedir";

if(!is_dir($dirname)){
    mkdir($dirname);
    echo "Directory successfully created";
}else{
    echo "Directory already exists";
}
?>
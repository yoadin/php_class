<?php
$filename = "labse.txt";
if(file_exists($filename)){
    unlink($filename);
    echo "File deleted successfully.";
}else{
    echo "file not found";
}

?>
<?php
$filename = "labse.txt";

$file = fopen($filename, "w") or die("Unable to open file");

$text = "Hello, this is a PHP file handling Exercise.";

fwrite($file,$text);

fclose($file);

echo "The File is created and text written successfully.";


?>
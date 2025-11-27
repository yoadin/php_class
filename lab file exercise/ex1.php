<?php
$filename = "labse.txt";
$file = fopen($filename, "r+") or die("File not found!");
fwrite($file, "New text at the start."); // Can write
rewind($file);
echo fread($file, filesize($filename)); // Can read
fclose($file);
?>

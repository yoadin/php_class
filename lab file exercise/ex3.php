<?php

//append to the file


$filename = "labse.txt";

$file = fopen($filename, "a") or die("Unable to ope file");
$txt = "\n This IS web design and programming II lab manual";

fwrite($file, $txt);
fclose($file);

echo "Text Appended successfully.";


?>
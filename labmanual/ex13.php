<?php

//check age for voting

$result = "";
if(isset($_GET["age"])){
    if(is_numeric($_GET["age"])){
        $age = $_GET["age"];
        if($age >= 18){
            $result = "Eligible for voting.";
        }else{
            $result = "Try next year";
        }
    }else{
            $result = "Try again.";
        }
}else{
    $result = "No entry found.";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligible for Vote</title>
</head>
<body>
    <div>
        <form action="ex13.php" method="get">
            <input type="number" name="age" value="" min="1" max="120"><br>
            <button type="submit">Submit</button>
        </form>

        <h3><?php echo $result; ?></h3>
    </div>
</body>
</html>
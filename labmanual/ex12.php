<?php

/* conditional statements
check if a number is even or odd
*/

$result ="";
if(isset($_GET["num"])){
    $num = $_GET["num"];
if(is_numeric($num)){
    if($num %2 ==0){
      $result = "Even";
    }else{
      $result = "Odd";
    }
}else{
    $result = "Try again";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number checker</title>
</head>
<body>
    <div>
        <form action="ex12.php" method="get">
            <input type="text" name="num" value="">
            <button type="submit">Submit</button>
        </form>
    </div>

    <h2><?php echo $result; ?></h2>
</body>
</html>
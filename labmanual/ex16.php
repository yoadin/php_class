<?php
//multiplication table

if(isset($_GET["num"])){
    $num = $_GET["num"];

    $mul = 1;

    for($i = 0; $i<=10; $i++){
        $mul = $num * $i;
        echo $mul . "<br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>
<body>
    <div>
        <form action="ex16.php" method="get">
            <input type="text" name="num" id="" value="" placeholder="Enter a number">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
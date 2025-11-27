<?php
$result = "";

if(isset($_GET["num1"])&&isset($_GET["num2"])&&isset($_GET["num3"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];
    
    if($num1 > $num2 && $num1 > $num3){
        $result = "$num1 is greater than $num2 and $num3";
    }elseif($num2 > $num1 && $num2 > $num3){
        $result = "$num2 is greater than $num1 and $num2";
    }else{
        $result = "$num3 is greater than $num1 and $num2";
    }
}else{
    $result ="invalid value entry";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Numbers</title>
</head>
<body>
    <form action="ex14.php" method="get">
        <input type="number" name="num1" id="" placeholder="enter first number"><br>
        <input type="number" name="num2" id="" placeholder="enter second number"><br>
        <input type="number" name="num3" id="" placeholder="enter third number"><br>
        <button type="submit">Submit</button>
    </form>

    <h3><?php echo $result; ?></h3>
</body>
</html>
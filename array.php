<?php

$foods = ['Banana', 'Mango', 'Apple'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['food'])){
        $foods[] = htmlspecialchars($_POST['food']);
    }
}

echo "My Favorite foods are: <br>";
echo '<ul>';
foreach($foods as $fo){
    echo '<li>'. $fo .'</li>';
}
echo '</ul>';

echo "Total Favorite Food: ". count($foods);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
        Enter Food Name: <input type="text" name="food">
        <button type="submit" value="submit">Enter</button>
    </form>
</body>
</html>
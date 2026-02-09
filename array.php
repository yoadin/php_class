<?php

$foods = ['Banana', 'Mango', 'Apple'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['food'])){
        $food = htmlspecialchars($_POST['food']);
        if(!in_array($food, $foods)){
            $foods[] = $food;
        }
    }

    if (!empty($_POST['del'])) {
        $del = htmlspecialchars(trim($_POST['del']));
        $key = array_search($del, $foods);
        if ($key !== false) {
            unset($foods[$key]);
        }
    }
}


echo "My Favorite foods are: <br>";
echo '<ul>';
foreach($foods as $fo){
    echo '<li>'. $fo .'</li>';
}
echo '</ul>';

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
        Enter name to delete: <input type = "text" name="del">
        <button type="submit" value="submit">Enter</button>
    </form>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $_SESSION['count']++;
}


if(isset($_POST['reset'])){
    unset($_SESSION['count']);
}

echo "You have visited this page " . $_SESSION['count'] . " times.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="visited.php" method="post">
        <button type="submit" value="submit" name="reset">Reset</button>
    </form>
</body>
</html>
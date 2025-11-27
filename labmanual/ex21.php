<?php

$students = [
    ["Name" => "Birhan Tesfa", "Subject" => "English", "Score" => 90],
    ["Name" => "Birhanu Tesema", "Subject" => "Biology", "Score" => 95],
    ["Name" => "Bisrat Tameru", "Subject" => "Chemistry", "Score" => 100]

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Array</title>
    <style>
        table{
            width: 250px;
            text-align: left;
        }

        table, th, td{
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Subject</th>
            <th>Score</th>
        </tr>
        <?php foreach($students as $student):  ?>
        <tr>
            <td><?php echo $student["Name"]; ?></td>
            <td><?php echo $student["Subject"]; ?></td>
            <td><?php echo $student["Score"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
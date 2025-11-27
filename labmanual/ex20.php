<?php

$students = [
    ["Name" => "Kalkidan Asdro", "Marks" => 88],
    ["Name" => "Mehari Bewnwtu", "Marks" => 78],
    ["Name" => "Mulutesfa Haylemariam" , "Marks" => 89]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
    <style>
        table{
            width: 250px;
            padding: 2px;
            text-align: left;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Marks</th>
        </tr>
        <?php foreach($students as $student): ?>
          <tr>
            <td><?php echo $student["Name"]; ?></td>
            <td><?php echo $student["Marks"]; ?></td>
          </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>
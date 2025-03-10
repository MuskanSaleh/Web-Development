<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
        .text {
            color: blue;
        }
    </style>
</head>
<body>

<?php
$salaries = [
    "Mr. A" => "1000$",
    "Mr. B" => "1200$",
    "Mr. C" => "1400$"
];

echo "<table>";
foreach ($salaries as $name => $salary) {
    echo "<tr>";
    echo "<td class='text'>Salary of $name is</td>";
    echo "<td>$salary</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

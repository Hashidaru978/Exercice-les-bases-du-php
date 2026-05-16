<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre = 5;
echo "<table border='1'>";
for($i=1; $i<=10; $i++){
echo "<tr>";
echo "<td>$nombre x $i</td>";
echo "<td>".($nombre * $i)."</td>";
echo "</tr>";
}
echo "</table>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tableau = [];
for($i=11, $ascii=65; $i<=36; $i++, $ascii++){
$tableau[$i] = chr($ascii);
}
echo "Boucle for <br>";
for($i=11; $i<=36; $i++){
echo $i." => ".$tableau[$i]."<br>";
}
echo "<br>Boucle foreach <br>";
foreach($tableau as $indice => $valeur){
echo $indice." => ".$valeur."<br>";
}
    ?>
</body>
</html>
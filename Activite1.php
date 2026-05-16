<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre1 = 10;
$nombre2 = 5;
echo "Somme : ".($nombre1 + $nombre2)."<br>";
echo "Différence : ".($nombre1 - $nombre2)."<br>";
echo "Produit : ".($nombre1 * $nombre2)."<br>";
echo "Quotient : ".($nombre1 / $nombre2)."<br>";
if($nombre1 > $nombre2){
echo "$nombre1 est supérieur à $nombre2";
}elseif($nombre1 < $nombre2){
echo "$nombre1 est inférieur à $nombre2";
}else{
echo "Les deux nombres sont égaux";
}
    ?>
</body>
</html>
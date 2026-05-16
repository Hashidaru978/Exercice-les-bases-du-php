<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!--While-->
    <?php
$nombre = 345;
$compteur = 0;
while(true){
 $tirage = rand(100,999);    
 $compteur++;
 if($tirage == $nombre){
break;
    }
}
echo "Trouvé en $compteur coups";
    ?>

 <!--For-->
    <?php
$nombre = 345;
for($i=1; ; $i++){
$tirage = rand(100,999);
if($tirage == $nombre){
echo "Trouvé en $i coups";    
break;
}
}
    ?>
</body>
</html>
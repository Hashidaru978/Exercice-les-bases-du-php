<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre = 7;
while(true){
$tirage = rand(1,100);
if($tirage % $nombre == 0){
 echo $tirage;
break;
}
}
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
try{
$a = 24;
$b = 18;
if(!is_int($a) || !is_int($b)){
throw new Exception("Les nombres doivent être entiers");
}
while($b != 0){
$reste = $a % $b;
$a = $b;
$b = $reste;
}
echo "PGCD = ".$a;
}catch(Exception $e){
echo $e->getMessage();
}
    ?>
</body>
</html>
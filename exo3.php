<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
do{
 $a = rand(1,100);
 $b = rand(1,100);
 $c = rand(1,100);
}while($a % 2 != 0 || $b % 2 == 0 || $c % 2 == 0);
echo "$a $b $c";
    ?>
</body>
</html>
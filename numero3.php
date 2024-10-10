<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>num3</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 2;
    
    if($a>$b){
        echo "<h1>Ordem crescente: $b $a </h1>";
    }
    else{
        echo "<h1>Ordem crescente: $a $b </h1>";
    }

    if($a<$b){
        echo "<h1>Ordem decrescente: $b $a </h1>";
    }
    else{
        echo "<h1>Ordem decrescente: $a $b </h1>";
    }
    ?>
</body>
</html>

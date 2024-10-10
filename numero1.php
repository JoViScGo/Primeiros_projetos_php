<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>num1</title>
</head>
<body>
    <?php
    $numpo = 10;
    $numze = 0;
    $numne = -10;

    echo "<h2>Valor 1: $numpo</h2>";
    echo "<h2>Valor 2: $numze</h2>";
    echo "<h2>Valor 3: $numne</h2>";

    if($numpo >0){
        echo "<h3>Valor 1 é positivo.</h3>";
    }
    else{
        echo"<h3>Valor 1 é negativo.</h3>";
    }
    
    if($numze ==0){
        echo "<h3>Valor 2 é positivo.</h3>";
    }
    else{
        echo"<h3>Valor 2 é negativo.</h3>";
    }
    
    if($numne <0){
        echo "<h3>Valor 3 é positivo.</h3>";
    }
    else{
        echo"<h3>Valor 3 é negativo.</h3>";
    }
    ?>


</body>
</html>
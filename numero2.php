<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>num2</title>
</head>
<body>
    <?php
    $y = 5;
    echo "<h1>O valor original é: $y</h1>";
    for ($x = 0; $x <= 10; $x++) {
        echo "<h3>Valor original vezes $x: </h3>", $y*$x ," <br>";
      } 
    ?>
</body>
</html>
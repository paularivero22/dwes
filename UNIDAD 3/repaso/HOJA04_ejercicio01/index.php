<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once('Circulo.php');

    $c = new Circulo(5.0);
    echo "Radio: " . $c->radio . "<br>";
    $c->radio = 10.0;
    echo "Radio: " . $c->radio . "<br>";
    ?>
</body>
</html>
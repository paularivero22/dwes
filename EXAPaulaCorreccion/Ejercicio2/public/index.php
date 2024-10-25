<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once '../vendor/autoload.php';

    use App\Clases\Coche;
    use App\Clases\Bombilla;
    
    function enciende_algo($o) {
        $o->encender();
    }
    

    $c = new Coche();
    $b = new Bombilla(10);

    $c->repostar(10);

    enciende_algo($c);
    echo "<br>";
    enciende_algo($b);
    echo "<br>";

    $c->apagar();
    echo "<br>";
    $b->apagar();
?>
</body>
</html>
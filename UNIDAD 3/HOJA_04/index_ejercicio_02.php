<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio2</title>
</head>

<body>
    <?php
    
    require_once 'Coche.php';

    $coche1 = new Coche("ABC123", 50);

    echo $coche1->mostrar() . "<br>";

    $coche1->acelera(30);
    echo "Después de acelerar 30 km/h:<br>";
    echo $coche1->mostrar() . "<br>";

    $coche1->acelera(50);
    echo "Después de intentar acelerar 50 km/h:<br>";
    echo $coche1->mostrar() . "<br>";

    $coche1->frena(40);
    echo "Después de frenar 40 km/h:<br>";
    echo $coche1->mostrar() . "<br>";

    $coche1->frena(100);
    echo "Después de intentar frenar 100 km/h:<br>";
    echo $coche1->mostrar() . "<br>";
    ?>

</body>

</html>
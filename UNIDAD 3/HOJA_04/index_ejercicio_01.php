<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio1</title>
</head>

<body>
    <?php

    require_once 'Circulo.php';


    $circulo1 = new Circulo(5);


    echo "Círculo 1:<br>";
    echo "Radio: " . $circulo1->getRadio() . "<br>";
    echo "Área: " . $circulo1->area() . "<br>";
    echo "Circunferencia: " . $circulo1->circunferencia() . "<br><br>";


    $circulo1->setRadio(10);
    echo "Círculo 1 después de cambiar el radio:<br>";
    echo "Nuevo Radio: " . $circulo1->getRadio() . "<br>";
    echo "Nueva Área: " . $circulo1->area() . "<br>";
    echo "Nueva Circunferencia: " . $circulo1->circunferencia() . "<br><br>";


    $circulo2 = new Circulo(3);
    echo "Círculo 2:<br>";
    echo "Radio: " . $circulo2->getRadio() . "<br>";
    echo "Área: " . $circulo2->area() . "<br>";
    echo "Circunferencia: " . $circulo2->circunferencia() . "<br>";
    ?>
</body>

</html>
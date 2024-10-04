<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio1</title>
</head>
<body>
    <?php
        include 'Productos.php';

        $empleado = new Empleado(2000);
        echo "<h3>Empleado</h3>";
        echo "<p>Nombre: Empleado Genérico</p>";
        echo "<p>Sueldo: " . $empleado->getSueldo() . "€</p>";

        $encargado = new Encargado(2500);
        echo "<h3>Encargado</h3>";
        echo "<p>Nombre: Encargado Genérico</p>";
        echo "<p>Sueldo: " . $encargado->getSueldo() . "€</p>";
    ?>
</body>
</html>
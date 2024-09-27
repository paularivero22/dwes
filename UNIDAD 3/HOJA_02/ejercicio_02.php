<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
        function suma($num1, $num2): mixed { //mixed: puede devolver cualquier tipo de numero
            return $num1 + $num2;
        }

        $num1 = 10;
        $num2 = 5;

        $resultado = suma($num1,$num2);
        echo 'El resultado es: ' . $resultado; 
    ?>
</body>
</html>
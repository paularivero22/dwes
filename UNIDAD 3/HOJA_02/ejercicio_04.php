<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
        function interesSimple($capital, $redito, $tiempo) {
            return ($capital * $redito * $tiempo) + $capital;
        }

        function interesCompuesto($capital, $redito, $tiempo) {
            return $capital * pow((1 + $redito), $tiempo) - $capital;
        }

        $capital = 1000;
        $redito = 0.02;
        $tiempo = 4;

        echo 'El interes compuesto es: ' . interesCompuesto($capital, $redito, $tiempo) . "<br>";
        echo 'El interes simple es: ' . interesSimple($capital, $redito, $tiempo);
    ?>    
</body>
</html>
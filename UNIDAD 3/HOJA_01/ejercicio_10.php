<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio10 </title>
    </head>

    <body>
        <?php
            $numero = 29;
            $esPrimo = true;

            if($numero <= 1) {
                $esPrimo = false; //si es menor o 1 no es primo
            } elseif ($numero % 2 == 0) {
                $esPrimo = false; //si es par no es primo
            } else {
                for($i = 3; $i <= $numero; $i++) {
                    if($numero % $i == 0) {
                        $esPrimo = false;
                        break;
                    } 
                }
            }

            if($esPrimo) {
                echo $numero . ' es un numero primo';
            } else {
                echo $numero . ' no es un numero primo';
            }
        ?>
    </body>
</html>
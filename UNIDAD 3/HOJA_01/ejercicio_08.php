<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio8 </title>
    </head>

    <body>
        <?php
            $num = 5;
            $factorial = 1;

            if($num > 0) {
                for($i = 1; $i <= $num; $i++) {
                    $factorial *= $i;
                }
                echo'El factorial de ' . $num . ' es: ' . $factorial;
            } else {
                echo"Error, el numero es un numero negativo";
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio6 </title>
    </head>

    <body>
        <?php
            $cantidad = 20;

            $fibonacci = [];

            $fibonacci[0] = 0;
            $fibonacci[1] = 1;

            for($i=2; $i < $cantidad; $i++) {
                $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
            }

            echo 'Los ' . $cantidad . ' primeros numeros de fibonacci son:<br/>';
            foreach($fibonacci as $j) {
                echo $j . "<br/>";
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio11 </title>
    </head>

    <body>
        <?php
            for($i = 10; $i >= 1; $i--) {
                $fila="";
                for($j = 10; $j >= $i; $j++) {
                    $fila .= $j . " ";
                }
                echo $fila . "<br/>";
            }
        ?>
    </body>
</html>
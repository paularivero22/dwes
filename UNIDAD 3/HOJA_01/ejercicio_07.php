<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio7 </title>
    </head>

    <body>
        <?php
            $serie = "";
            $numerador = 0;

            for($i=1; $i <= 10; $i++) {
                $numerador = $i;
                $denominador = 2 ** $i;  //2^$i
                $serie .= $numerador . "/" . $denominador ."<br/>";
            }

            echo"10 primeros numeros de la serie:<br/>" . $serie;
        ?>
    </body>
</html>
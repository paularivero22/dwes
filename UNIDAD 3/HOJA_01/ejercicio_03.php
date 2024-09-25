<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio3 </title>
    </head>

    <body>
        <?php
            $num = 121;
            $cadena = strval($num);

            $cadenaInvertida = strrev($cadena);

            if($cadena === $cadenaInvertida) {
                print"El numero es capicua";    
            } else {
                print"El numero no es capicua"
            }

        ?>
    </body>
</html>
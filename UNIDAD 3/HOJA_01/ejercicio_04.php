<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio4 </title>
    </head>

    <body>
        <?php
            $numerosCapicua = "";
            for($i=100; $i<=999; $i++) {
                $cadena = strval($i);
    
                $cadenaInvertida = strrev($cadena);
    
                if($cadena === $cadenaInvertida) {
                    $numerosCapicua .= $i . "<br/>";
                }
            }

            echo "Estos son los numeros capicua del 100 al 999: <br/>" . $numerosCapicua; 
        ?>
    </body>
</html>
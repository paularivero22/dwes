<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio5 </title>
    </head>

    <body>
        <?php
            $numeros = "";
            for($i = 100; $i<=999; $i++) {
                $cadena = strval($i);

                $digito1 = intval($cadena[0]);
                $digito2 = intval($cadena[1]);
                $digito3 = intval($cadena[2]);

                if( ($digito1 + $digito2 + $digito3) == ($digito1 * $digito2 * $digito3) ) {
                    $numeros .= $cadena . "<br/>";
                }
            }

            echo "Los numeros que cumplen la condicion son:<br/>" . $numeros;
        ?>
    </body>
</html>
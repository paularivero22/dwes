<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio2 </title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');

            $fechaActual = date_create(); //crea un objeto datetime
            $fechaFormateada = date_format($fechaActual, "d-m-Y");
            print"Fecha actual: " . $fechaFormateada . "<br/>";
            
            $dias=5;
            
            date_modify($fechaActual, "-$dias days"); //puede restarlo porque es un objeto datetime en vez de una cadena
            $fechaFormateada = date_format($fechaActual, "d-m-Y");

            print"Fecha restando " . $dias . " dias: " . $fechaFormateada . "<br/>"; 
        ?>
    </body>
</html>
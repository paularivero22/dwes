<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio3 </title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');
            
            $dia = 2;
            $mes = 12;
            $anio = 2004;

            if(checkdate($dia, $mes, $anio)) {
                print"La fecha es valida"; 
            } else {
                print"La fecha no es valida";
            }

            //echo checkdate($mes, $dia, $anio) ? "La fecha es correcta" : "La fecha no es correcta"
        ?>
    </body>
</html>
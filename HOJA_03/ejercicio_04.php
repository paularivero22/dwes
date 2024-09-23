<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio4 </title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');
            
            $fechaActual = date_create();
            $fechaActualF = date_format($fechaActual, "d-m-Y");
            print"Primera fecha: " . $fechaActualF . "<br/>";

            $dia=19;
            $mes=9;
            $anio=2024;

            $fechaDiff = date_create("$anio-$mes-$dia"); //$fechaDiff = "2024-09-19"
            $fechaDiffF = date_format($fechaDiff, "d-m-Y");
            print"Segunda fecha: " . $fechaDiffF . "<br/>";

            $intervalo = date_diff($fechaActual, $fechaDiff);

            $diasDiff = $intervalo->days; 

            print"Han transcurrido " . $diasDiff . " dias";
        ?>
    </body>
</html>
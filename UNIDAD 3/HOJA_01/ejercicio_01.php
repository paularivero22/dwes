<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio1 </title>
    </head>

    <body>
        <?php  
            //setlocale(LC_TIME, 'es_ES.UTF-8');
            //es_ES.UTF-8 -> idioma, region y tipo de caracteres
            
            
            //print strftime("%A, %D, %B, de %Y");

            $fecha = new DateTime();
            $fecha->setTimezone(new DateTimeZone("UTF+2"));

            $diaIngles = date_format($fecha, 'N');
            
            $dia = match($diaIngles) {
                '1' => 'Lunes', 
                '2' => 'Martes',
                '3' => 'Miercoles',
                '4' => 'Jueves',
                '5'=> 'Viernes',
                '6' => 'Sabado',
                '7' => 'Domingo',
            };

            echo ($fecha->format("l, d-M-Y H:i:s"));
        ?>
    </body>
</html>
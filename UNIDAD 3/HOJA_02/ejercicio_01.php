<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        include 'funciones.inc.php';
        
        function fecha_formateada() {
            date_default_timezone_set(Europe/Madrid);
            
            setlocale(LC_TIME, 'es_ES.UTF-8');
            //es_ES.UTF-8 -> idioma, region y tipo de caracteres
            
            
            print strftime("%A, %D, %B, de %Y");
        }
        print fecha_formateada()
    ?>
</body>
</html>
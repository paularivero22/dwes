<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
        function imprimir_mensaje($mensaje): void {
            echo $mensaje . "<br/>";
        }

        $mensaje = 'Hola mundo';
        echo " " . imprimir_mensaje($mensaje); 
    ?>
</body>
</html>
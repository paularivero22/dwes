<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>

<body>
    <?php
    function calcularLetra($dni) {

        if(strlen($dni) == 8) {
            $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

            $resto = $dni % 23;

            $letra = $letras[$resto];

            return $letra;
        } else {
            return "dni no valido";
        }
    }

    $dni = "72195836";
    echo $dni . calcularLetra($dni);
    ?>
</body>

</html>
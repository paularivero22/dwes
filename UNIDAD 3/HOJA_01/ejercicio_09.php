<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio9 </title>
    </head>

    <body>
        <?php
            $precioPorKm = 2.5;
            $distancia = 900;
            $diasEstancia = 8;
            $precioFinal = 0;

            $precioNormal = $distancia * $precioPorKm * 2;

            if($diasEstancia > 7 && $distancia > 800) {
                $descuento = $precioNormal * 0.30;
                $precioFinal = $precioNormal - $descuento;
            } else {
                $precioFinal = $precioNormal;
            }

            echo'El precio del billete es: ' . $precioFinal . "<br/>";
        ?>
    </body>
</html>
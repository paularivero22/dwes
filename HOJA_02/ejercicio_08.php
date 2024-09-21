<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio8 </title>
    </head>

    <body>
        <?php
            $cantidad = 67;
            $billetes10 = (int)($cantidad / 10);
            $resto = $cantidad % 10;

            $billetes5 = (int)($resto / 5);
            $monedas = $resto % 5;  
            
            print"Desglose de " . $cantidad . "€: <br/>";
            print"Billetes de 10€: " . $billetes10 . "<br/>";
            print"Billetes de 5€ " . $billetes5 . "<br/>";
            print"Monedas de 1€ " . $monedas . "<br/>";
        ?>
    </body>
</html>
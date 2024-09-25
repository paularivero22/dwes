<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio3 </title>
    </head>

    <body>
        <?php
            $a = 8;
            $b = 3;
            $c = 5;
            
            print"Operaciones: <br/>";

            print"(a == b) && (c > b): " . ( ( ($a == $b) && ($c > $b) ) ? "Verdadero" : "Falso") . "<br/>";
            print"(a == b) && (b == c): " . ( ( ($a == $b) && ($b == $c) ) ? "Verdadero" : "Falso") . "<br/>";
            print"(b <= c) " . ( ($b <= $c) ? "Verdadero" : "Falso") . "<br/>";
        ?>
    </body>
</html>
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
            print"a == b: " . ($a == $b ? "Verdadero" : "Falso") . "<br/>"; // "\$a" lo analiza como texto en vez de como variable o se puede usar comillas simples ( '' ) 
            print"a != b: " . ($a != $b ? "Verdadero" : "Falso") . "<br/>";
            print"a < b: " . ($a < $b ? "Verdadero" : "Falso") . "<br/>";
            print"a > b: " . ($a > $b ? "Verdadero" : "Falso") . "<br/>"; //si se utiliza /n en vez de <br/> no haria falta la estructura html
            print"a >= c: " . ($a >= $c ? "Verdadero" : "Falso") . "<br/>";
            print"a <= c: " . ($a <= $c ? "Verdadero" : "Falso") . "<br/>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio5 </title>
    </head>

    <body>
        <?php
            $temporal="Juan";
            print "El tipo de la variable es: " . gettype($temporal) . "<br/>";
            
            $temporal=3.14;
            print "El tipo de la variable es: " . gettype($temporal) . "<br/>";

            $temporal=false;
            print "El tipo de la variable es: " . gettype($temporal) . "<br/>";

            $temporal=3;
            print "El tipo de la variable es: " . gettype($temporal) . "<br/>";

            $temporal=null;
            print "El tipo de la variable es: " . gettype($temporal) . "<br/>";
        ?>
    </body>
</html>
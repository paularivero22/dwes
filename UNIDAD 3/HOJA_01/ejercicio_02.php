<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio2 </title>
    </head>

    <body>
        <?php
        $suma = 0;
            for($i = 10; i<=100; $i++) { //for($i = 10; $i<=100; $i+=2)
                if($i % 2 == 0) {
                    $suma += $i;
                }
            }

            print"La suma es: " . $suma . "<br/>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ejercicio12 </title>
    </head>

    <body>
        <?php
            for ($numero = 3; $numero <= 999; $numero++) {
                $esPrimo = true; // Suponemos que es primo
    
                for ($i = 2; $i < $numero; $i++) {
                    if ($numero % $i == 0) { 
                        $esPrimo = false; 
                        break; 
                    }
                }
    
                if ($esPrimo) {
                    echo $numero . "<br/>";
                }
            }
        ?>
    </body>
</html>
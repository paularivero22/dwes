<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio7 </title>
    </head>

    <body>
        <?php
          $var1 = 10;
          $var2 = 20;
          
          print"Antes del intercambio: <br/>";
          print"var1: $var1 , var2: $var2";

          $temporal = $var1;
          $var1 = $var2;
          $var2 = $temporal;

          print"Variables intercambiadas: <br/>";
          print"var1: $var1 , var2: $var2";
        ?>
    </body>
</html>
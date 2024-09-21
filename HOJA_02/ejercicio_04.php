<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio4 </title>
    </head>

    <body>
        <?php
            $nombre="Paula";
            print("Informacion de la variable nombre: ");
            var_dump($nombre);
            print("<br/>");

            print("Contenido de la variable: $nombre <br/>");
            
            $nombre=null;
            print("Despues de asignarle un valor nulo:");
            var_dump($nombre);
            print("<br/>");
        ?>   
    </body>
</html>
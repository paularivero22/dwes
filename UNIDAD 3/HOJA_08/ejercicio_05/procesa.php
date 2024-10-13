<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(!empty($_POST['numero'])) {
                $numero = $_POST['numero'];

                if($numero % 2 == 0) {
                    echo "Es par";
                } else {
                    echo "Es impar";
                }
            } else {
                echo "porfavor introduzca un numero";
            }
        }

    ?>
    <button onclick="window.location.href='formulario.html'">Volver al formulario</button>
</body>
</html>
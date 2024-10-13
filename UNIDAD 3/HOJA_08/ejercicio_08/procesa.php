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
            if(!empty($_POST["numero1"]) && !empty($_POST["numero2"]) && !empty($_POST["operacion"])) {
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $operacion = $_POST["operacion"];
                $resultado = 0;

                switch ($operacion) {
                    case "suma": 
                       $resultado = $numero1 + $numero2;
                       break;
                    case "resta":
                        $resultado = $numero1 - $numero2;
                        break;
                    case "producto":
                        $resultado = $numero1 * $numero2;
                        break;
                    case "cociente":
                        $resultado = $numero1 / $numero2;
                        break;
                }

                echo "El resultado de realizar " . $operacion . " de los numeros " . $numero1 . " y " . $numero2 . " es " . $resultado;
            }
        }
    ?>
</body>
</html>
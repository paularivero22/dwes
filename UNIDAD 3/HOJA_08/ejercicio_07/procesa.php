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
            if(!empty($_POST["numeroMenor"]) && !empty($_POST["numeroMayor"])) {
                $numeroMenor = $_POST["numeroMenor"];
                $numeroMayor = $_POST["numeroMayor"];

                if($numeroMenor < $numeroMayor) {
                    echo "Lista de pares de numeros de " . $numeroMenor . " y " . $numeroMayor . ": ";
                    for ($i = $numeroMenor, $j = $numeroMayor; $i <= $numeroMayor; $i++, $j--) {
                        echo "(" . $i . "," . $j . ") ";
                    }
                } else {
                    echo "El numero menor que has introducido no es realmente menor o es igual";
                }
            }
        }
    ?>
</body>
</html>
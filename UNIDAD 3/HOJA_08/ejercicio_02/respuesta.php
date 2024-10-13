<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && isset($_POST["modulo"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $modulo = $_POST["modulo"];

        echo "Nombre: " . $nombre . "<br>"
        . "Apellido: " . $apellido . "<br>"
        . "Modulo: " . $modulo;

    }
}
?>
</body>
</html>


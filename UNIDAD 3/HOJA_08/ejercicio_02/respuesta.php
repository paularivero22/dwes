<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && isset($_POST["modulo"])) {
        $nombre = $_POST["NOMBRE"];
        $apellido = $_POST["apellido"];
        $modulo = $_POST["modulo"];

        echo $nombre . $apellido . $modulo;
    }


}
?>
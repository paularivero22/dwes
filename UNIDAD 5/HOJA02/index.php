<?php
$nombreCookie = "ultima_visita";

if (isset($_COOKIE[$nombreCookie])) {
    $ultima_visita = $_COOKIE[$nombreCookie];
    echo "Su ultima visita fue el: " . date("d/m/Y H:i:s", strtotime($ultima_visita));
} else {
    echo "Es tu primera visita";
}

$fecha_actual = date("Y-m-d H:i:s");
setcookie("ultima_visita", $fecha_actual, time() + 86400);
?>
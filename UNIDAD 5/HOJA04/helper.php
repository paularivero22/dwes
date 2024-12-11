<?php
function flash($clave, $mensaje = null)
{
    if ($mensaje === null) {
        if (isset($_SESSION['flash'][$clave])) {
            $valor = $_SESSION['flash'][$clave];
            unset($_SESSION['flash'][$clave]);
            return $valor;
        }
        return null;
    } else {
        $_SESSION['flash'][$clave] = $mensaje;
        return null;
    }
}

function iniciar_sesion()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function redireccionar($url)
{
    header("Location: $url");
    exit();
}
?>
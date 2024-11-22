<?php

function validar_requerido($campo) {
    return !empty($campo);
}

function validar_numerico($campo) {
    return is_numeric($campo);
}

function validar_subida_fichero($archivo) {
    return isset($archivo['tmp_name']) && is_uploaded_file($archivo['tmp_name']);
}

function validar_formato_imagen($archivo) {
    $ext = pathinfo($archivo, PATHINFO_EXTENSION);
    return in_array(strtolower($ext), ['jpeg', 'png']);
}

function limpiar_texto($texto) {
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function limpiar_entrada($datos) {
    foreach ($datos as &$campo) {
        $campo = limpiar_texto($campo);
    }
    return $datos;
}

function redireccionar($url) {
    header("Location: $url");
    exit();
}
?>

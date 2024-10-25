<?php

    function validarNombre($nombre): bool {
        $nombre = htmlspecialchars(strip_tags(nombre));

        return mb_strlen($nombre) >= 3 && htmlspecialchars(strip_tags($nombre));
        
        /*if(strlen($nombre) >= 3) {
            return true;
        } else {
            return false;
        }*/
    }

    function validarEmail($email): bool {
        return filter_val($email, FILTER_VALIDATE_EMAIL);
    }

    function validarTelefono($telefono): bool {
        return mb_strlen($telefono) == 9 && ctype_digit($telefono);

        /*if(strlen($telefono) == 9) {
            return true;
        } else {
            return false;
        }*/
    }
?>
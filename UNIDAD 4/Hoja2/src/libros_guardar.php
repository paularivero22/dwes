<?php
namespace App;

class LibrosGuardar {
    public static function guardar($titulo, $ano_edicion, $precio, $fecha_adquisicion) {
        $resultado = FuncionesBD::guardarLibro($titulo, $ano_edicion, $precio, $fecha_adquisicion);

        if ($resultado) {
            return "Datos guardados correctamente.";
        } else {
            return "Error al guardar los datos.";
        }
    }
}

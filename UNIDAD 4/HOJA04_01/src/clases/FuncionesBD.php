<?php
namespace App\clases;

use PDO;

class FuncionesBD
{
    public static function getEquipos(): array
    {
        $dwes = ConexionBD::getConexion();
        $consulta = $dwes->query("SELECT nombre FROM equipos");
        $resultado = [];
        while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $resultado[] = $registro['nombre'];
        }

        return $resultado;
    }
}

?>
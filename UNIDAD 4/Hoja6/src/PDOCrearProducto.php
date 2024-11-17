<?php

namespace App;

use App\ConexionBD;
use PDO;
use Exception;

class PDOCrearProducto implements ProductoRepositorioInterface
{
    public function crear(array $producto): bool
    {
        $conexion = ConexionBD::getInstance()->getConnection();

        try {
            $sql = "INSERT INTO productos (nombre, precio, descripcion, imagen) VALUES (:nombre, :precio, :descripcion, :imagen)";
            $stmt = $conexion->prepare($sql);
            return $stmt->execute($producto);
        } catch (Exception $e) {
            return false;
        }
    }
}

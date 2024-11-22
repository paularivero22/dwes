<?php
namespace App;

use ConexionBD;
interface ProductoRepositorio {
    public function crear($producto);
}

class PDOCrearProducto implements ProductoRepositorio {
    private $conn;

    public function __construct() {
        $this->conn = ConexionBD::getInstance()->getConnection();
    }

    public function crear($producto) {
        $sql = "INSERT INTO productos (nombre, precio, descripcion, imagen) VALUES (:nombre, :precio, :descripcion, :imagen)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre', $producto['nombre']);
        $stmt->bindParam(':precio', $producto['precio']);
        $stmt->bindParam(':descripcion', $producto['descripcion']);
        $stmt->bindParam(':imagen', $producto['imagen']);

        return $stmt->execute();
    }
}
?>

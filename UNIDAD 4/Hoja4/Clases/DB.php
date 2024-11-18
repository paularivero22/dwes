<?php
namespace App;

class DB {
    private const DSN = 'mysql:host=localhost;dbname=dwes_04_supermercado;charset=utf8';
    private const USUARIO = 'root';
    private const PASSWORD = 'root';
    private static ?PDO $conexion = null;

    private function __construct() {}

    public static function getConexion(): PDO {
        if (self::$conexion === null) {
            self::$conexion = new PDO(self::DSN, self::USUARIO, self::PASSWORD);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conexion;
    }

    public static function getProductos(): array {
        $productos = [];
        $pdo = self::getConexion();

        // Obtener productos de alimentación
        $stmt = $pdo->query("SELECT * FROM productos p 
                             JOIN alimentaciones a ON p.codigo = a.codigo");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categoria = new Categoria($row['categoria_id'], $row['categoria_nombre']);
            $productos[] = new Alimentacion($row['codigo'], $row['precio'], $row['nombre'], $row['mes_caducidad'], $row['anio_caducidad'], $categoria);
        }

        // Obtener productos de electrónica
        $stmt = $pdo->query("SELECT * FROM productos p 
                             JOIN electronicas e ON p.codigo = e.codigo");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categoria = new Categoria($row['categoria_id'], $row['categoria_nombre']);
            $productos[] = new Electronica($row['codigo'], $row['precio'], $row['nombre'], $row['plazo_garantia'], $categoria);
        }

        return $productos;
    }

    public static function getCategorias(): array {
        $pdo = self::getConexion();
        $stmt = $pdo->query("SELECT * FROM categorias");
        $categorias = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categorias[] = new Categoria($row['id'], $row['nombre']);
        }
        return $categorias;
    }
}

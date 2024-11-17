<?php
namespace Clases;

use PDO;
use PDOException;

class ConexionBD {
    private static ?PDO $conexion = null;

    public static function getConexion(): PDO {
        if (self::$conexion === null) {
            $host = 'localhost';
            $dbname = 'dwes_03_funicular';
            $user = 'root';
            $password = '';
            try {
                self::$conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error al conectar a la base de datos: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}

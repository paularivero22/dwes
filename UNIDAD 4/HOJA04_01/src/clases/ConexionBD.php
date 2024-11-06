<?php
namespace App\clases;

require '../vendor/autoload.php';

use PDO;
use PDOException;

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();

class ConexionBD {
    private static $conexion = null;

    public static function getConexion() {
        $dns = $_ENV['BD_DNS'];
        $usuario = $_ENV['BD_USERNAME'];
        $password = $_ENV['BD_PASSWORD'];

        if (self::$conexion == null) {
            try {
                self::$conexion = new PDO($dns, $usuario, $password);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error al conectar " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}
?>
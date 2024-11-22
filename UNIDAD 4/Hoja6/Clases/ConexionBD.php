<?php
namespace App;

use PDO;
use PDOException;

class ConexionBD {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $dsn = getenv('DB_DSN');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        try {
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ConexionBD();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>

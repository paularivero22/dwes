<?php

namespace App;

use PDO;
use PDOException;

class ConexionBD
{
    private static ?ConexionBD $instance = null;
    private ?PDO $connection = null;

    private function __construct()
    {
        $dsn = getenv('DB_DSN');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance(): ConexionBD
    {
        if (self::$instance === null) {
            self::$instance = new ConexionBD();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}

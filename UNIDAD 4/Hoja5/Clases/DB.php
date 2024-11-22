<?php
namespace App;

use PDO;

class DB {
    private const DSN = 'mysql:host=localhost;dbname=dwes_05_hospital;charset=utf8';
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

    public static function getMedicos(): array {
        $pdo = self::getConexion();
        $medicos = [];

        // Médicos de familia
        $stmt = $pdo->query("SELECT * FROM medicos m JOIN familia f ON m.codigo = f.codigo");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $turno = new Turno($row['turno_id'], $row['turno_descripcion']);
            $medicos[] = new Familia($row['codigo'], $row['nombre'], $row['edad'], $turno, $row['num_pacientes']);
        }

        // Médicos de urgencias
        $stmt = $pdo->query("SELECT * FROM medicos m JOIN urgencia u ON m.codigo = u.codigo");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $turno = new Turno($row['turno_id'], $row['turno_descripcion']);
            $medicos[] = new Urgencia($row['codigo'], $row['nombre'], $row['edad'], $turno, $row['unidad']);
        }

        return $medicos;
    }

    public static function getTurnos(): array {
        $pdo = self::getConexion();
        $stmt = $pdo->query("SELECT * FROM turnos");
        $turnos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $turnos[] = new Turno($row['id'], $row['descripcion']);
        }
        return $turnos;
    }
}

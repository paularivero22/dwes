<?php
namespace App;

use mysqli;

class FuncionesBD {
    public static function obtenerConexion() {
        $host = 'localhost';
        $usuario = 'root';
        $password = '';
        $base_de_datos = 'dwes_02_libros';

        $conexion = new mysqli($host, $usuario, $password, $base_de_datos);
        if ($conexion->connect_error) {
            echo("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }

    public static function guardarLibro($titulo, $ano_edicion, $precio, $fecha_adquisicion) {
        $conexion = self::obtenerConexion();
        $sql = "INSERT INTO libros (titulo, ano_edicion, precio, fecha_adquisicion)
                VALUES ('$titulo', '$ano_edicion', '$precio', '$fecha_adquisicion')";
        
        if ($conexion->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public static function obtenerLibros() {
        $conexion = self::obtenerConexion();
        $sql = "SELECT * FROM libros";
        $resultado = $conexion->query($sql);

        $libros = [];
        while ($row = $resultado->fetch_assoc()) {
            $libros[] = $row;
        }
        return $libros;
    }
}

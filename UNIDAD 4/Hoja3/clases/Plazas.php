<?php
namespace Clases;

class Plazas {
    public static function obtenerPlazasDisponibles(): array {
        $pdo = ConexionBD::getConexion();
        $stmt = $pdo->query("SELECT * FROM plazas WHERE reservada = 0");
        return $stmt->fetchAll();
    }

    public static function actualizarPrecios(array $precios): void {
        $pdo = ConexionBD::getConexion();
        $pdo->beginTransaction();
        try {
            foreach ($precios as $id => $precio) {
                $stmt = $pdo->prepare("UPDATE plazas SET precio = ? WHERE id = ?");
                $stmt->execute([$precio, $id]);
            }
            $pdo->commit();
        } catch (\Exception $e) {
            $pdo->rollBack();
            throw $e;
        }
    }
}

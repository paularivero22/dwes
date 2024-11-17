<?php
namespace Clases;

class Llegada {
    public static function procesarLlegada(): void {
        $pdo = ConexionBD::getConexion();
        $pdo->beginTransaction();
        try {
            $pdo->exec("DELETE FROM pasajeros");
            $pdo->exec("UPDATE plazas SET reservada = 0");
            $pdo->commit();
        } catch (\Exception $e) {
            $pdo->rollBack();
            throw $e;
        }
    }
}

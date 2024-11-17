<?php
namespace Clases;

class Reserva {
    public static function realizarReserva(string $nombre, string $dni, int $plazaId): void {
        $pdo = ConexionBD::getConexion();
        $pdo->beginTransaction();
        try {
            // Verificar si el DNI ya existe
            $stmt = $pdo->prepare("SELECT * FROM pasajeros WHERE dni = ?");
            $stmt->execute([$dni]);
            if ($stmt->rowCount() > 0) {
                throw new \Exception("El DNI ya existe.");
            }

            // Insertar pasajero
            $stmt = $pdo->prepare("INSERT INTO pasajeros (nombre, dni, sexo) VALUES (?, ?, '-')");
            $stmt->execute([$nombre, $dni]);

            // Actualizar plaza
            $stmt = $pdo->prepare("UPDATE plazas SET reservada = 1 WHERE id = ?");
            $stmt->execute([$plazaId]);

            $pdo->commit();
        } catch (\Exception $e) {
            $pdo->rollBack();
            throw $e;
        }
    }
}

<?php
require '../vendor/autoload.php';

use Clases\Plazas;
use Clases\Reserva;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $plazaId = $_POST['plaza'];
    try {
        Reserva::realizarReserva($nombre, $dni, $plazaId);
        $mensaje = "Reserva completada. Plaza ID: $plazaId";
    } catch (Exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}

$plazas = Plazas::obtenerPlazasDisponibles();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservar plaza</title>
</head>
<body>
    <h1>Reservar plaza</h1>
    <?php if (!empty($mensaje)) echo "<p>$mensaje</p>"; ?>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="dni" placeholder="DNI" required>
        <select name="plaza">
            <?php foreach ($plazas as $plaza): ?>
                <option value="<?= $plaza['id'] ?>">Plaza <?= $plaza['id'] ?> - <?= $plaza['precio'] ?>€</option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Reservar</button>
    </form>
</body>
</html>

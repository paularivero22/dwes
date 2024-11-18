<?php
require '../vendor/autoload.php';

use Clases\Llegada;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Llegada::procesarLlegada();
        $mensaje = "Operación completada: pasajeros eliminados y plazas actualizadas.";
    } catch (Exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Llegada al destino</title>
</head>
<body>
    <h1>Llegada al destino</h1>
    <?php if (!empty($mensaje)) echo "<p>$mensaje</p>"; ?>
    <form method="post">
        <button type="submit">Procesar llegada</button>
    </form>
</body>
</html>
?>
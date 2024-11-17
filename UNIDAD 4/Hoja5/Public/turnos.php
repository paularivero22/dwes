<?php
require '../vendor/autoload.php';

use App\DB;

$turnos = DB::getTurnos();
$turnoSeleccionado = $_GET['turno'] ?? null;
$medicos = [];

if ($turnoSeleccionado) {
    $medicos = array_filter(DB::getMedicos(), function ($medico) use ($turnoSeleccionado) {
        return $medico->getTurno()->getId() == $turnoSeleccionado;
    });
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Turnos</title>
</head>
<body>
    <h1>Turnos</h1>
    <form method="get">
        <select name="turno">
            <?php foreach ($turnos as $turno): ?>
                <option value="<?= $turno->getId() ?>" <?= $turnoSeleccionado == $turno->getId() ? 'selected' : '' ?>>
                    <?= $turno->getDescripcion() ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <h2>Médicos</h2>
    <ul>
        <?php foreach ($medicos as $medico): ?>
            <li><?= $medico ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

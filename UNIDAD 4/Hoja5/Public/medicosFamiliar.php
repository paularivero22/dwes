<?php
require '../vendor/autoload.php';

use App\DB;

$numPacientes = $_GET['numPacientes'] ?? null;
$medicosFamilia = [];

if ($numPacientes !== null) {
    $medicosFamilia = array_filter(DB::getMedicos(), function ($medico) use ($numPacientes) {
        return $medico instanceof App\Familia && $medico->getNumPacientes() >= $numPacientes;
    });
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Médicos de Familia</title>
</head>
<body>
    <h1>Médicos de Familia</h1>
    <form method="get">
        <label for="numPacientes">Número de Pacientes:</label>
        <input type="number" name="numPacientes" id="numPacientes" value="<?= $numPacientes ?>">
        <button type="submit">Consultar</button>
    </form>

    <h2>Resultados</h2>
    <ul>
        <?php foreach ($medicosFamilia as $medico): ?>
            <li><?= $medico ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

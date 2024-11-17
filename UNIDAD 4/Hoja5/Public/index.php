<?php
require '../vendor/autoload.php';

use App\DB;

$medicos = DB::getMedicos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Médicos del Hospital</title>
</head>
<body>
    <h1>Médicos del Hospital</h1>
    <ul>
        <?php foreach ($medicos as $medico): ?>
            <li><?= $medico ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="turnos.php">Ver Turnos</a>
    <a href="medicosFamilia.php">Médicos de Familia</a>
</body>
</html>

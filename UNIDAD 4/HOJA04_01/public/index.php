<?php
require_once '../vendor/autoload.php';
use App\clases\ConexionBD;
use App\clases\FuncionesBD;

$connection = ConexionBD::getConexion();

if ($connection instanceof PDO) {
    echo 'Conexión establecida correctamente';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Jugadores de la NBA</h1>

    <form method="post">
        <p>Equipos:
            <select>
                <?php
                require '../vendor/autoload.php';

                $registro = FuncionesBD::getEquipos();
                foreach ($registro as $r) {
                    echo '<option>' . $r . '</option>';
                }
                ?>
            </select>
        </p>
        <input type="submit" value="Mostrar" name="Mostrar">
    </form>
</body>

</html>
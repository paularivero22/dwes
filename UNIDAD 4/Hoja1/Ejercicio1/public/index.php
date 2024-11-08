<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once '../vendor/autoload.php';
    use App\Clases\ConexionBD;
    $connection = ConexionBD::getConnection();

    if ($connection instanceof PDO) {
        echo 'Conexión establecida correctamente';
    }
    ?>

    <?php
    use App\Clases\FuncionBD;
    $funciones = new FuncionBD();
    $equipos = $funciones->getEquipos();
    ?>
    <form method="post">
        <p>Equipo:
            <select id="nombre" name="nombre">
                <?php
                foreach ($equipos as $equipo) {
                    echo '<option>' . $equipo['nombre'] . '</option>';
                }
                echo '<input type="submit" name="enviar" id="enviar"';
                ?>
            </select>
        </p>
    </form>
    <table>
        <?php
        if ($REQUEST_METHOD == "POST") {
            $nombreEquipo = strval($_POST['nombre']);
            $jugadores = $funciones->getJugadoresEquipo($nombreEquipo);
            echo '<th>Nombre</th>';
            foreach ($jugadores as $jugador) {
                echo '<tr><td>' . $jugador['nombre'] . '</td></tr>';
            }
        }

        ?>
    </table>
</body>

</html>
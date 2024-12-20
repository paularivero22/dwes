<?php
session_start();

if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = false;
}

if (!$_SESSION['autenticado']) {
    header('Location: login.php');
    exit();
}

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = array();
}

function registrarVisita() {
    $_SESSION['visitas'][] = date("Y-m-d H:i:s");
}

if (count($_SESSION['visitas']) == 0) {
    echo "Es tu primera visita.";
} else {
    echo "visitas anteriores: <br>";
    foreach ($_SESSION['visitas'] as $visita) {
        echo $visita . "<br>";
    }
}

registrarVisita();

if (isset($_POST['limpiar'])) {
    $_SESSION['visitas'] = array();
    echo "<br>Se ha limpiado el registro de visitas.";
}
?>

<form method="post">
    <input type="submit" name="limpiar" value="Limpiar registro de visitas">
</form>

<p>Estado de autenticación: <?php echo $_SESSION['autenticado'] ? 'Autenticado' : 'No autenticado'; ?></p>
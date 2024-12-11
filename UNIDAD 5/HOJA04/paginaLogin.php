<?php
require 'helper.php';
require 'src/App/Autenticarse.php';

Autenticarse::inicializar();

$error = flash('error');
$correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';
?>

<form action="index.php?action=autenticar" method="post">
    <label for="correo">Correo:</label>
    <input type="email" name="correo" value="<?= htmlspecialchars($correo) ?>" required><br>

    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required><br>

    <button type="submit">Iniciar sesión</button>
</form>

<?php if ($error): ?>
    <p><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

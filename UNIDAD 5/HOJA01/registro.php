<?php
$host = 'localhost:3307';
$db = 'dwes_03_funicular';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $message = 'Claves incorrectas';
    } else {
        $password_hashed = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
        try {
            $stmt->execute(['usuario' => $usuario, 'password' => $password_hashed]);
            $message = 'El usuario ha sido registrado correctamente';
        } catch (PDOException $e) {
            $message = 'Error: ' . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>

<body>
    <h1>Registro de Usuarios</h1>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
        <label for="confirm_password">Repetir Contraseña:</label>
        <input type="password" name="confirm_password" required><br>
        <button type="submit">Registrar</button>
    </form>
    <p>
        <?php
            echo $message;
        ?>
    </p>
</body>

</html>
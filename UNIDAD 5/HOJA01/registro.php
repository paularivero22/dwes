<?php
$host = 'localhost:3307'; 
$dbname = 'dwes_03_funicular';
$username = 'root'; 
$password = 'root'; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $clave2 = $_POST['password2'];

        if ($clave !== $clave2) {
            echo "Claves incorrectas.";
        } else {
            $contrasenia = password_hash($clave, PASSWORD_BCRYPT);

            $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':password', $contrasenia);

            try {
                $stmt->execute();
                echo "El usuario ha sido registrado correctamente.";
            } catch (PDOException $e) {
                echo "Error al registrar el usuario: " . $e->getMessage();
            }
        }
    }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="registro.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <label for="password2">Repetir Contraseña:</label>
        <input type="password" name="password2" required><br><br>


        <button type="submit">Registrar</button>
    </form>
</body>
</html>

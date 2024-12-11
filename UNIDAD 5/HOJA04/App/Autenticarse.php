<?php
namespace App;

class Autenticarse
{
    public static function inicializar()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function configurar()
    {
        $pdo = Conexion::getInstance();
        $sql = "CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            correo VARCHAR(255) NOT NULL,
            contraseña VARCHAR(255) NOT NULL
        )";
        $pdo->exec($sql);
        self::crearDatosUsuario();
    }

    private static function crearDatosUsuario()
    {
        $pdo = Conexion::getInstance();
        $sql = "SELECT * FROM usuarios WHERE correo = 'educantabria'";
        $stmt = $pdo->query($sql);
        if ($stmt->rowCount() == 0) {
            $passwordHash = password_hash('password', PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (correo, contraseña) VALUES ('educantabria', :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['password' => $passwordHash]);
        }
    }

    public static function autenticar()
    {
        if (!self::esPost()) {
            flash('error', 'Método HTTP no permitido');
            redireccionar('index.php?action=paginaLogin');
            return;
        }

        if (self::estaLogueado()) {
            redireccionar('index.php?action=paginaConectado');
            return;
        }

        if (!isset($_POST['correo']) || !isset($_POST['contraseña'])) {
            flash('error', 'Correo o contraseña no proporcionados');
            redireccionar('index.php?action=paginaLogin');
            return;
        }

        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $pdo = Conexion::getInstance();
        $sql = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['correo' => $correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            redireccionar('index.php?action=paginaConectado');
        } else {
            flash('error', 'Credenciales incorrectas');
            $_SESSION['correo'] = $correo;
            redireccionar('index.php?action=paginaLogin');
        }
    }

    public static function paginaConectado()
    {
        if (!self::estaLogueado()) {
            flash('error', 'No tienes acceso a esta página');
            redireccionar('index.php?action=paginaLogin');
            return;
        }

        redireccionar('paginaConectado.php');
    }

    public static function desconectarse()
    {
        session_destroy();
        redireccionar('index.php?action=paginaLogin');
    }

    public static function paginaLogin()
    {
        if (self::estaLogueado()) {
            redireccionar('index.php?action=paginaConectado');
        }

        redireccionar('paginaLogin.php');
    }

    public static function runAccion()
    {
        if (!isset($_GET['action'])) {
            redireccionar('index.php?action=paginaLogin');
            return;
        }

        $accion = $_GET['action'];

        switch ($accion) {
            case 'paginaLogin':
                self::paginaLogin();
                break;
            case 'autenticar':
                self::autenticar();
                break;
            case 'paginaConectado':
                self::paginaConectado();
                break;
            case 'desconectarse':
                self::desconectarse();
                break;
            default:
                redireccionar('index.php?action=paginaLogin');
        }
    }

    public static function estaLogueado()
    {
        return isset($_SESSION['usuario_id']);
    }

    public static function esPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}
?>
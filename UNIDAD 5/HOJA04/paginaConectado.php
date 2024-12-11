<?php
require 'helper.php';
require 'src/App/Autenticarse.php';

Autenticarse::inicializar();
Autenticarse::paginaConectado();

echo "Te has conectado. Tu id de usuario es: " . $_SESSION['usuario_id'];
?>
<form action="index.php?action=desconectarse" method="post">
    <button type="submit">Cerrar sesión</button>
</form>

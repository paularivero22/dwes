<?php
namespace MiProyecto\Traits;

trait Mensaje {
    public function mostrarMensaje(string $mensaje): void {
        echo "<p>$mensaje</p>";
    }
}
?>

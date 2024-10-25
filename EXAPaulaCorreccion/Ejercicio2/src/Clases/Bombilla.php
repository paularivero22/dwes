<?php
namespace App\Clases;

use App\Interfaces\Encendible;

class Bombilla implements Encendible {
    private int $horasDeVida;
    private String $estado;

    public function __construct(int $horas) {
        $this->horasDeVida = $horas;
        $this->estado = "apagado";
    }

    public function encender() {
        if($this->horasDeVida > 0) {
            $this->estado = "encendido";
            $this->horasDeVida -= 2;
            echo "Se ha encendido la bombilla";
        } else {
            echo "No se ha podido encender";
        }
    }

    public function apagar() {
        $this->estado = "apagado";
        echo "se ha apagado la bombilla";
    }
}
?>
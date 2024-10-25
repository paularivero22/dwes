<?php
namespace App\Clases;

use App\Interfaces\Encendible;

class Coche implements Encendible {
    private float $gasolina;
    private int $bateria;
    private String $estado;
    
    public function __construct() {
        $this->gasolina=0;
        $this->bateria=10;
        $this->estado = "apagado";
    }

    public function encender() {
        if($this->gasolina > 0 && $this->bateria > 0 && $this->estado = "apagado") {
            $this->estado = "encendido";
            $this->gasolina -= 1;
            $this->bateria -= 1;
            echo "Se ha arrancado el coche";
        } else {
            echo "No se ha podido encender el coche";
        }
    }

    public function apagar() {
        if($this->estado = "encendido") {
            $this->estado = "apagado";
            echo "Se ha parado el coche";
        } else {
            echo "El ccoche ya estaba apagado";
        }
    }

    public function repostar($litros) {
        $this->gasolina += $litros;
    }
}
?>
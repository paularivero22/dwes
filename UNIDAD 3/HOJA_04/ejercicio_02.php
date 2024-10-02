<?php
// Archivo: Coche.php

class Coche
{

    private $matricula;
    private $velocidad;

    public function __construct($matricula, $velocidad = 0)
    {
        $this->matricula = $matricula;
        $this->velocidad = $velocidad;
    }

    public function acelera($incremento)
    {
        $this->velocidad += $incremento;
        if ($this->velocidad > 120) {
            $this->velocidad = 120;
        }
    }

    public function frena($decremento)
    {
        $this->velocidad -= $decremento;
        if ($this->velocidad < 0) {
            $this->velocidad = 0;
        }
    }

    public function mostrar()
    {
        return "Matrícula: " . $this->matricula . ", Velocidad: " . $this->velocidad . " km/h";
    }
}
?>
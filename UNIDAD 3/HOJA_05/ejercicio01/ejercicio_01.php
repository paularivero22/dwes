<?php
class Empleado
{
    protected float $sueldo;
    protected string $nombre;

    public function __construct(float $sueldo) {
        $this->sueldo = $sueldo;
    }
    public function getSueldo(): float {
        return $this->sueldo;
    }
}

class Encargado extends Empleado {
    public function __construct(float $sueldo) {
        parent::__construct($sueldo);
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo*1.15;
    }
    
}
?>
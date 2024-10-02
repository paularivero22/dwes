<?php 

    class Cuenta {
        protected int $numero;
        protected string $titular;
        protected float $saldo;
        public function __construct(int $numero, string $titular,float $saldo) {
            $this->numero = $numero;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function getSaldo(): float {
            return $this->saldo;
        }

        public function ingreso($cantidad): void {
            $this->saldo += $cantidad;
        }

        public function reintegro($cantidad): void {
            if($this->saldo >= $cantidad) {
                $this->saldo -= $cantidad;
            } else {
                echo "Saldo insuficiente";
        }
    }

    public function esPreferencial($cantidad): bool {
        if($this->saldo > $cantidad) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar(): void {
        echo "Numero: " . $this->numero;
        echo "Titular: " . $this->titular;
        echo "Saldo: " . $this->saldo;
    }
}

class CuentaCorriente extends Cuenta {
    public float $couta_mantenimiento;

    public function __construct(int $numero, string $titular, float $saldo, float $cuota) {
        parent::__construct($numero, $titular, $saldo);
        $this->couta_mantenimiento = $cuota;
    }

    public function getCuota(): float {
        return $this->couta_mantenimiento;
    }

    public function reintegro($cantidad): void {
        if($this->saldo >= $cantidad) {
            if($cantidad > 20) {
                $this->saldo -= $cantidad;
            } else {
                echo "No puedes hacer un reintegro de una cantidad menor que 20€";
            }
        } else {
            echo "Sueldo insuficiente"; 
        }
    }

    public function mostrar(): void {
        parent::_mostrar();
        echo "Cuota de Mantenimiento: " . $this->couta_mantenimiento;
    }
}
?>
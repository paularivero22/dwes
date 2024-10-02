<?php


class Circulo
{
    private float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function setRadio(float $radio): void
    {
        $this->radio = $radio;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }

    public function __get($name): mixed
    {
        return $this->$name;
    }

    public function area(): float
    {
        return pi() * pow($this->radio, 2);
    }

    public function circunferencia(): float
    {
        return 2 * pi() * $this->radio;
    }
}
?>
<?php


class Circulo
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function getRadio()
    {
        return $this->radio;
    }

    public function __set($name, $value)
    {
        if ($name === 'radio') {
            $this->radio = $value;
        }
    }

    public function __get($name)
    {
        if ($name === 'radio') {
            return $this->radio;
        }
    }

    public function area()
    {
        return pi() * pow($this->radio, 2);
    }

    public function circunferencia()
    {
        return 2 * pi() * $this->radio;
    }
}
?>
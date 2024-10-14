<?php
    class Circulo {
        private float $radio;
        
        public function __construct($radio) {
            $this->radio = $radio;
        }

        public function __set($circulo, $radio) {
            $this->radio = $radio;
        }

        public function __get($circulo) {
            return $this->radio;
        }
    }
?>
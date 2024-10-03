<?php
class Nomina {
    private $sueldo;
    private $descuento;

    public function __construct($sueldo, $descuento) {
        $this->sueldo = $sueldo;
        $this->descuento = $descuento;
    }

    public function calcularSueldoNeto() {
        return $this->sueldo - $this->descuento;
    }
}
?>
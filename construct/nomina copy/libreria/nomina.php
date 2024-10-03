<?php
class Nomina {
    private $sueldo;
    private $descuento;

    public function __construct($sueldo, $descuento) {
        $this->sueldo = $sueldo;
        $this->descuento = $descuento;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function calcularSueldoNeto() {
        return $this->sueldo - $this->descuento;
    }
}
?>

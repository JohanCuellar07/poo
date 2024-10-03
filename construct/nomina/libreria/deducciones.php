<?php
class Deducciones {
    private $sueldo;

    public function __construct($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function calcularSalud() {
        return $this->sueldo * 0.12;
    }

    public function calcularPension() {
        return $this->sueldo * 0.16;
    }

    public function calcularArl() {
        return $this->sueldo * 0.052;
    }

    public function calcularTotalDeducciones() {
        return $this->calcularSalud() + $this->calcularPension() + $this->calcularArl();
    }
}
?>

<?php
class Salud {
    private $sueldo;

    public function __construct($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function calcularSalud() {
        return $this->sueldo * 0.12;
    }
}
?>

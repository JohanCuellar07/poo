<?php
class Arl {
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

    public function calcularArl() {
        return $this->sueldo * 0.052;
    }
}
?>

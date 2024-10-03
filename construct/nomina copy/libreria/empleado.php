<?php
class Empleado {
    private $diasTrabajados;
    private $valorDia;

    public function __construct($diasTrabajados, $valorDia) {
        $this->diasTrabajados = $diasTrabajados;
        $this->valorDia = $valorDia;
    }

    public function getDiasTrabajados() {
        return $this->diasTrabajados;
    }

    public function setDiasTrabajados($diasTrabajados) {
        $this->diasTrabajados = $diasTrabajados;
    }

    public function getValorDia() {
        return $this->valorDia;
    }

    public function setValorDia($valorDia) {
        $this->valorDia = $valorDia;
    }

    public function calcularSueldo() {
        return $this->diasTrabajados * $this->valorDia;
    }
}
?>

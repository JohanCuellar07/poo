<?php
class Empleado {
    private $id;
    private $nombres;
    private $apellidos;
    private $cargo;
    private $valorDia;
    private $diasTrabajados;

    // Constructor
    public function __construct($id, $nombres, $apellidos, $cargo, $valorDia, $diasTrabajados) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->cargo = $cargo;
        $this->valorDia = $valorDia;
        $this->diasTrabajados = $diasTrabajados;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getValorDia() {
        return $this->valorDia;
    }

    public function getDiasTrabajados() {
        return $this->diasTrabajados;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setValorDia($valorDia) {
        $this->valorDia = $valorDia;
    }

    public function setDiasTrabajados($diasTrabajados) {
        $this->diasTrabajados = $diasTrabajados;
    }

    // Métodos
    public function calcularSalario() {
        return $this->diasTrabajados * $this->valorDia;
    }

    public function calcularSubsidioTransporte() {
        $salarioMin = 1300000;
        if ($this->calcularSalario() < 2 * $salarioMin) {
            return 120000;
        } else {
            return 0;
        }
    }

    public function calcularRetencion() {
        $salarioMin = 1300000;
        $salario = $this->calcularSalario();
        if ($salario > 12 * $salarioMin) {
            return $salario * 0.08;
        } elseif ($salario > 8 * $salarioMin) {
            return $salario * 0.04;
        } elseif ($salario > 6 * $salarioMin) {
            return $salario * 0.02;
        } else {
            return 0;
        }
    }

    public function calcularSalud() {
        return $this->calcularSalario() * 0.12;
    }

    public function calcularPension() {
        return $this->calcularSalario() * 0.16;
    }

    public function calcularArl() {
        return $this->calcularSalario() * 0.052;
    }

    public function calcularDeducibles() {
        return $this->calcularSalud() + $this->calcularPension() + $this->calcularArl();
    }

    public function calcularPagoTotal() {
        return $this->calcularSalario() + $this->calcularSubsidioTransporte() - $this->calcularRetencion() - $this->calcularDeducibles();
    }
}
?>

<?php
class Nomina {
    private $empleados = [];
    private $saludTotal = 0;
    private $pensionTotal = 0;
    private $arlTotal = 0;
    private $retencionTotal = 0;
    private $totalPagos = 0;

    // Método para agregar empleado
    public function agregarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

    // Calcular los totales de la nómina
    public function calcularTotales() {
        foreach ($this->empleados as $empleado) {
            $this->saludTotal += $empleado->calcularSalud();
            $this->pensionTotal += $empleado->calcularPension();
            $this->arlTotal += $empleado->calcularArl();
            $this->retencionTotal += $empleado->calcularRetencion();
            $this->totalPagos += $empleado->calcularPagoTotal();
        }
    }

    // Generar tabla de empleados con datos
    public function generarTabla() {
        $tabla = [];
        foreach ($this->empleados as $empleado) {
            $tabla[] = [
                'id' => $empleado->getId(),
                'nombre' => $empleado->getNombres(),
                'cargo' => $empleado->getCargo(),
                'salario' => $empleado->calcularSalario(),
                'subsidioTransporte' => $empleado->calcularSubsidioTransporte(),
                'salud' => $empleado->calcularSalud(),
                'pension' => $empleado->calcularPension(),
                'arl' => $empleado->calcularArl(),
                'retencion' => $empleado->calcularRetencion(),
                'pagoTotal' => $empleado->calcularPagoTotal()
            ];
        }
        return $tabla;
    }

    // Getters de los totales
    public function getSaludTotal() {
        return $this->saludTotal;
    }

    public function getPensionTotal() {
        return $this->pensionTotal;
    }

    public function getArlTotal() {
        return $this->arlTotal;
    }

    public function getRetencionTotal() {
        return $this->retencionTotal;
    }

    public function getTotalPagos() {
        return $this->totalPagos;
    }
}
?>

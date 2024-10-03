<?php
class Descuento {
    private $pagoSalud;
    private $pagoPension;
    private $pagoArl;

    public function __construct($pagoSalud, $pagoPension, $pagoArl) {
        $this->pagoSalud = $pagoSalud;
        $this->pagoPension = $pagoPension;
        $this->pagoArl = $pagoArl;
    }

    public function getPagoSalud() {
        return $this->pagoSalud;
    }

    public function setPagoSalud($pagoSalud) {
        $this->pagoSalud = $pagoSalud;
    }

    public function getPagoPension() {
        return $this->pagoPension;
    }

    public function setPagoPension($pagoPension) {
        $this->pagoPension = $pagoPension;
    }

    public function getPagoArl() {
        return $this->pagoArl;
    }

    public function setPagoArl($pagoArl) {
        $this->pagoArl = $pagoArl;
    }

    public function calcularDescuento() {
        return $this->pagoSalud + $this->pagoPension + $this->pagoArl;
    }
}
?>

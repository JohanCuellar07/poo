<?php
class Saludo {
    private $saludar;

    public function setSaludar($saludar) {
        $this -> saludar = $saludar;
    }

    public function getSaludar() {
        return $this -> saludar;
    }

    public function saluda($saludar) {
        $this -> setSaludar($saludar);
        return $this -> getSaludar();
    }
}
?>

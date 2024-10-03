<?php
class Saludo{
    public $saludar;

    public function saluda($saludar){
        $this -> saludar = $saludar;
        return $this -> saludar;
    }
}
?>
<?php
class Operaciones{
    public $num1;
    public $num2;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    public function sumar($num1, $num2){
        $this -> suma = $num1 + $num2;
        return $this -> suma;
    }

    public function restar($num1, $num2){
        $this -> resta = $num1 - $num2;
        return $this -> resta;
    }

    public function multiplicar($num1, $num2){
        $this -> multiplicacion = $num1 * $num2;
        return $this -> multiplicacion;
    }

    public function dividir($num1, $num2){
        $this -> division = $num1 / $num2;
        return $this -> division;
    }
}
?>
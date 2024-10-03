<?php
class Areas{
    private $base;
    private $altura;
    public $cuadrado;
    public $rectangulo;
    public $triangulo;

    public function __construct(Medida $base, Medida $altura){
        $this -> base = $base;
        $this -> altura = $altura;
    }

    public function areaCuadrado(){
        $this -> cuadrado = $this -> base -> getValor() * $this -> base -> getValor();
        return $this -> cuadrado;
    }

    public function areaRectangulo(){
        $this -> rectangulo = $this -> base -> getValor() * $this -> altura -> getValor();
        return $this -> rectangulo;
    }

    public function areaTriangulo(){
        $this -> triangulo = $this -> base -> getValor() * $this -> altura -> getValor() / 2;
        return $this -> triangulo;
    }
}
?>
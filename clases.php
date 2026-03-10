<?php
class Coche{
    public $marca;
    public $modelo;
    public $color;

    function __construct($marca, $modelo, $color){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    function mostrarInfo(){
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

$coche1 = new Coche("Toyota", "Corolla", "Rojo");
$coche1->mostrarInfo();
?>
<?php
class Coche {
    
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    
    public function acelerar() {
        $this->velocidad += 1;
    }

    
    public function frenar() {
        if ($this->velocidad > 0) {
            $this->velocidad -= 1;
        }
    }

    
    public function mostrarInformacion() {
        if (is_object($this)) {
            return "Color: {$this->color}, Marca: {$this->marca}, Modelo: {$this->modelo}, Velocidad: {$this->velocidad}, Caballaje: {$this->caballaje}, Plazas: {$this->plazas}";
        } else {
            return "No es un objeto válido.";
        }
    }
}


$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);


$coche->setColor("Rosa");
$coche->setMarca("Audi");
echo $coche->mostrarInformacion();


// var_dump($coche->getModelo());
// var_dump($coche);
// var_dump($coche1);
// var_dump($coche2);
// var_dump($coche3);
?>
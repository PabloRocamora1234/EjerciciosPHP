<?php
interface IMac {
    public function encender();
    public function apagar();
}

class Ordenador implements IMac {
    const MARCA = "Apple";

    public $software;

    public function encender() {
        return "El ordenador está encendido.";
    }

    public function apagar() {
        return "El ordenador está apagado.";
    }
}


$mac = new Ordenador();
$mac->software = "macOS Big Sur";

echo $mac->encender();
echo $mac->apagar();
echo Ordenador::MARCA;
?>

<?php
class Persona {
    protected $nombre;
    protected $apellido;
    protected $altura;
    protected $edad;

    
    public function __construct($nombre, $apellido, $altura, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = $altura;
        $this->edad = $edad;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function hablar() {
        return "Estoy hablando.";
    }

    public function caminar() {
        return "Estoy caminando.";
    }
}

class Informatico extends Persona {
    protected $lenguajes;
    protected $experienciaProgramador;

    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }

    
    public function programar() {
        return "Estoy programando en {$this->lenguajes}.";
    }

    public function repararOrdenador() {
        return "Estoy reparando un ordenador.";
    }

    public function hacerOfimatica() {
        return "Estoy haciendo tareas de ofimática.";
    }
}

class TecnicoRedes extends Informatico {
    private $experienciaRedes;

    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, $experienciaRedes) {
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
        $this->experienciaRedes = $experienciaRedes;
    }

    public function auditarRedes() {
        return "Estoy auditando redes con {$this->experienciaRedes} años de experiencia.";
    }
}


$tecnico = new TecnicoRedes("Carlos", "Pérez", 1.75, 30, "PHP, Java", 5, 3);
echo $tecnico->hablar();
echo $tecnico->programar();
echo $tecnico->auditarRedes();
?>

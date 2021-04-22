<?php 
class Persona {
public $dni;
public $nombre;
public $edad;
public $nacionalidad;

public function imprimir(){
}
}

class Alumno extends Persona {
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;



    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function imprimir(){
        
    }
    
    }

class Docente extends Persona {
    public $especialidad;
    
        public function imprimir(){
        }      
}
//programa
$alumno1-> new Alumno();
$alumno1-> nombre = "Tamara Omelaniuk";
$alumno1-> new Alumno();
$alumno1-> new Alumno();
$alumno1-> new Alumno();

?>
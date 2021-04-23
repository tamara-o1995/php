<?php 
class Persona {
protected $dni;
protected $nombre;
protected $edad;
protected $nacionalidad;

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

    public function setNacionalidad($nacionalidad){ $this->nombre = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

}
class Alumno extends Persona {
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;


    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    
    }
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "Nombre = " . $this->nombre . "<br>";
        echo "Edad = " . $this->edad . "<br>";
        echo "Nota Portfolio = " . $this->notaPortfolio . "<br>";
        echo "Nota PHP = " . $this->notaPhp . "<br>";
        echo "Nota Proyecto = " . $this->notaProyecto . "<br>";
        echo "Promedio = " . $this->calcularPromedio() . "<br><br>";
    }
    public function calcularPromedio(){
        $promedio = ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto)/3;
         return $promedio;
    }


    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
    
    }

class Docente extends Persona {
    public $especialidad;
        const ESPECIALIDAD_WP = "Wordpress";
        const ESPECIALIDAD_ECO = "Economía aplicada";
        const ESPECIALIDAD_BBDD = "Base de datos";

    
        public function imprimir(){
            echo "Nombre = " . $this->nombre . "<br>";
            echo "Edad = " . $this->edad . "<br>";
            echo "Especialidad = " . $this->especialidad . "<br><br>";
        } 

        public function imprimirEpecialidadesHabilitadas() {
            echo "La especialidad de un docente puede ser: <br>";
            echo self::ESPECIALIDAD_WP . "<br>";
            echo self::ESPECIALIDAD_ECO . "<br>";
            echo self::ESPECIALIDAD_BBDD . "<br>";
        }
        public function __get($propiedad) {
            return $this->$propiedad;
        }
    
        public function __set($propiedad, $valor) {
            $this->$propiedad = $valor;
        }
    
        public function __destruct() {
            echo "Destruyendo el objeto " . $this->nombre . "<br>";
        }
}
//programa
$alumno1 = new Alumno();
$alumno1-> setNombre("Ana Valle");
$alumno1->setEdad (36) ;
$alumno1->setNacionalidad ("Argentina");
$alumno1->notaPhp = 9;
$alumno1->notaPortfolio = 8;
$alumno1->notaProyecto = 9;
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->nombre = "Matias Perez";
$alumno2->dni = "40123876";
$alumno2->notaPhp = 10;
$alumno2->imprimir();

$docente1 = new Docente();
$docente1->nombre = "David Ledesma";
$docente1->especialidad = Docente::ESPECIALIDAD_ECO; 
$docente1->imprimir();
$docente1->imprimirEpecialidadesHabilitadas();


?>
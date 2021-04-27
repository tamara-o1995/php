<?php
class Persona
{
    private $dni;
    private $nombre;
    private $correo;
    private $celular;

    public function __construct($nombre, $dni, $correo, $celular)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->correo = $correo;
        $this->celular = $celular;
    }


    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir()
    {
        echo "Documento " . $this->dni . "<br>";
        echo "Nombre " . $this->nombre . "<br>";
        echo "Correo " . $this->correo . "<br>";
        echo "Celular " . $this->celular . "<br>";
    }
}

class Alumno extends Persona
{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct($nombre, $dni, $mail, $celular, $fechaNac)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->mail = $mail;
        $this->celular = $celular;
        $this->fechaNac = $fechaNac;
        $this->peso = 0.0;
        $this->altura = 0.0;
        $this->aptoFisico = 0.0;
        $this->presentismo = 0.0;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir()
    {

        echo " <tr class='text-center'>
                <td>$this->dni</td>
                <td>$this->nombre</td>
                <td>$this->mail</td>
                <td>$this->celular</td>
                <td>$this->fechaNac</td>
                <td>$this->peso</td>
                <td>$this->altura</td>
                <td>$this->aptoFisico</td>
                <td>$this->presentismo</td>
            </tr>";
    }

    public function setFichaMedica($pes, $alt, $apt)
    {
        $this->peso = $pes;
        $this->altura = $alt;
        $this->aptoFisico = $apt;
    }
}

class Entrenador extends Persona
{
    private $aClases;

    public function __construct($nombre, $dni, $mail, $celular)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->mail = $mail;
        $this->celular = $celular;
        $this->aClases = array();
    }

    public function imprimir()
    {
        echo "clases " . $this->aClases . "<br>";
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Clase
{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        // $this->entrenador= 0 ;
        $this->aAlumnos = array();
    }


    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir()
    {
        echo "nombre" . $this->nombre;
        echo "entrenador" . $this->entrenador;
        echo "aAlumnos" . $this->aAlumnos;
    }

    public function asignarEntrenador($e)
    {
        $this->entrenador = $e;
    }
    public function InscribirAlumno($alumn)
    {
        $this->aAlumnos[] = $alumn;
    }
    public function ImprimirListado()
    {
        echo "<table class='table table-success' 'table table-bordered' 'table-striped' 'table table-hover' 'table-success text-center' style='width:500px'>";
        echo "<tr class='table-active table-dark' scope='row'><th colspan='2' class='text-center'>GIMNASIO</th></tr>
 
              <tr>
                <th>Clase</th>
                <td>" . $this->nombre . "</td>
              </tr>
              <tr>
                <th>Entrenador</th>
                <td>" . $this->entrenador->nombre . "</td>
              </tr>
              <tr class='table-active table-dark' scope='row'>
                <th colspan='2' class='text-uppercase text-center'>Alumnos</th>
              </tr>";
        foreach ($this->aAlumnos as $alumno) {
            echo "<tr>
                        <td>" . $alumno->nombre . "</td>
                        <td>" . $alumno->dni . "</td>
                </tr>";
        }


        "</table>";
    }
}

$entrenador1 = new Entrenador("Miguel Ocampo", "34987789", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("Andrea Zarate", "28987589",  "andrea@mail.com", "11768654");

$alumno1 = new Alumno("40787657", "Dante Montera", "dante@gmail.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica("90", "1.78", "1");
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766547", "Dario Turchi", "dante@gmail.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica("73", "1.68", "0");
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@gmail.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica("90", "1.87", "1");
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gasto Aguilar", "gaston@gmail.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica("70", "1.69", "0");
$alumno4->presentismo = 98;

$clase1 = new Clase("Funcional");
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
//$clase1->imprimirListado();

$clase2 = new Clase("Zumba");
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
//$clase2->imprimirListado();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Gimnasio</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase">Clases</h1>
                <?php $clase1->imprimirListado(); ?>
                <?php $clase2->imprimirListado(); ?>
            </div>
            
            <table class="table table-success 'table-striped' 'table table-hover' 'text-center'" style='width:500px'>
                <tr class="table-active table-dark text-center" scope="row">
                    <h2 class="text-uppercase">Listado de alumnos</h2>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>MAIL</th>
                    <th>CELULAR</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>PESO</th>
                    <th>ALTURA</th>
                    <th>APTO FISICO</th>
                    <th>PRESENTISMO</th>
                </tr>

                <?php $alumno1->imprimir(); ?>
                <?php $alumno2->imprimir(); ?>
                <?php $alumno3->imprimir(); ?>
                <?php $alumno4->imprimir(); ?>
            </table>
        </div>
    </div>
</body>

</html>
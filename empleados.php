<?php

ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados [] = array("dni"=> 33001123,"nombre"=> "David Garcia", "bruto"=> 85000.30);
$aEmpleados [] = array("dni"=> 40874456,"nombre"=> "Ana Del Valle", "bruto"=> 90000);
$aEmpleados [] = array("dni"=> 67567565,"nombre"=> "Andres Perez", "bruto"=> 90000);
$aEmpleados [] = array("dni"=> 75744545,"nombre"=> "Victoria Luz", "bruto"=> 70000);


function calcularNeto($bruto){
    return $bruto - $bruto * 0.17;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Listado de empleados</h1>
            </div>
        </div>
    <table class="table table-hover border">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Sueldo</th>
            </tr>
            <?php 
              foreach ($aEmpleados as $empleado) { 
                  ?> 
                <tr>
                    <td><?php echo $empleado["dni"]; ?></td>
                    <td><?php echo strtoupper($empleado["nombre"]);?></td>
                    <td><?php echo "$" . number_format(calcularNeto($empleado ["bruto"]), 2, ",", "."); ?></td>
                    
             </tr>
             <?php 
              }
            ?> 
    </table>  
</head>
<body>
    
</body>
</html>
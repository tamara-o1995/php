<?php

ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);

$aNotas = array();
$aNotas[] = array("id" => 1, "alumno" => "Juan Perez", "nota 1" => 9, "nota 2" => 8);
$aNotas[] = array("id" => 2, "alumno" => "Ana Valle", "nota 1" => 4, "nota 2" => 9);
$aNotas[] = array("id" => 3, "alumno" => "Gonzalo Roldan", "nota 1" => 7, "nota 2" => 6);

function calcularPromedio($nota1, $nota2)
{
    return ($nota1 + $nota2) / 2;
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
                <h1>Actas</h1>
            </div>
        </div>
        <table class="table table-hover border">
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Promedio</th>
            </tr>
            <?php
            foreach ($aNotas as $nota) {
            ?>
                <tr>
                    <td><?php echo $nota["id"]; ?></td>
                    <td><?php echo $nota["alumno"]; ?></td>
                    <td><?php echo $nota["nota 1"]; ?></td>
                    <td><?php echo $nota["nota 2"]; ?></td>
                    <td><?php echo calcularPromedio($nota["nota 1"], $nota["nota 2"]); ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <?php
        $suma = 0;
        foreach ($aNotas as $nota) {
            $suma += calcularPromedio($nota["nota 1"], $nota["nota 2"]);
        }
        echo "Promedio de la cursada: " . $suma / count($aNotas);
        ?>
        </head>

        <body>

        </body>

</html>
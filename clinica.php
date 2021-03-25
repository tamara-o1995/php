

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$aPacientes = array ();
$aPacientes[0] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);

$aPacientes[1] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);

$aPacientes[2] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79
);

$aPacientes[3] = array(
    "dni" => "23.684.385",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <table class="table table-striped">
            <tr>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Peso</th>
            </tr>
            <?php
                foreach ($aPacientes as $aPaciente) {
                echo '<tr>';
                    echo '<td>' . $aPaciente["dni"] . '</td>';
                    echo '<td>' . $aPaciente["nombre"] . '</td>';
                    echo '<td>' . $aPaciente["edad"] . '</td>';
                    echo '<td>' . $aPaciente["peso"] . '</td>';
                echo '</tr>';
            }

            ?>

        </table>
    </div>
</body>
</html>

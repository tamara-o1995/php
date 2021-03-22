<?php

$fecha = date("d/m/Y");
$edad = 26;
$nombre = "Tamara";
$aPeliculas = array(
      "Shrek",
      "Patch Adams",
      "Avengers"
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ficha personal</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
      <div class="container">
            <div class="row">
                  <div class="col-12 pt-3 pb-5 text-center">
                        <h1>Ficha personal</h1>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                        <table class="table table-hover border">
                              <tr>
                                    <th>Fecha:</th>
                                    <td><?php echo date("d/m/Y"); ?></td>
                              </tr>
                              <tr>
                                    <th>Nombre y apellido</th>
                                    <td><?php echo $nombre; ?></td>
                              </tr>
                              <tr>
                                    <th>Edad:</th>
                                    <td><?php echo $edad; ?></td>
                              </tr>
                              <tr>
                                    <th>Peliculas favoritas:</th>
                                    <td><?php
                                          echo $aPeliculas[0] . "<br>" . $aPeliculas[1] . "<br>" . $aPeliculas[2];
                                          ?>
                                    </td>

                              </tr>
                        </table>
                  </div>
            </div>
      </div>

</body>

</html>
<?php
$aProductos = array();
$aProductos[0] = array(
    "nombre" => "TV 45\"",
    "marca" => "Samsung",
    "precio" => 45000
);
$aProductos[1] = array(
    "nombre" => "Heladera",
    "marca" => "LG",
    "precio" => 35000
);
$aProductos[2] = array(
    "nombre" => "iPhone XR",
    "marca" => "Apple",
    "precio" => 200000
);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <table class="table table-hover border">
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Precio</th>
            </tr>

            <tr>
                <td><?php echo $aProductos[0]["nombre"]; ?></td>
                <td><?php echo $aProductos[0]["marca"]; ?></td>
                <td><?php echo $aProductos[0]["precio"]; ?></td>
                <td><button class="btn btn-primary">Comprar</button></td>
            </tr>
            <tr>
                <td><?php echo $aProductos[1]["nombre"]; ?></td>
                <td><?php echo $aProductos[1]["marca"]; ?></td>
                <td><?php echo $aProductos[1]["precio"]; ?></td>
                <td><button class="btn btn-primary">Comprar</button></td>
            </tr>
            <tr>
                <td><?php echo $aProductos[2]["nombre"]; ?></td>
                <td><?php echo $aProductos[2]["marca"]; ?></td>
                <td><?php echo $aProductos[2]["precio"]; ?></td>
                <td><button class="btn btn-primary">Comprar</button></td>
            </tr>
        </table>
        <?php
        $subTotal=0;
        for ($i=0; $i< count($aProductos); $i++){
        $subTotal+= $aProductos[$i]["precio"];
        echo "<h2>Subtotal: $".$subTotal."</h2>";
        }
        echo "<h1>Total: $".$subTotal."</h1>";
        ?>
    </div>

</body>

</html>
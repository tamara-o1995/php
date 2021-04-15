<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (file_exists("archivo.txt")) {
    $jsonClientes = file_get_contents("archivo.txt");

    $aClientes = json_decode($jsonClientes, true);
} else {
    $aClientes = array();
}
$id = isset($_GET["id"]) && $_GET["id"] != "" ? $_GET["id"] : "";


if ($_POST) {
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];

    $aClientes[] = array(
        "dni" => $dni,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo,

    );
    $json_encode = json_encode($aClientes);

    file_put_contents("archivo.txt", $json_encode);
}
if (isset($_GET["id"]) && $_GET["id"] != "" && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    unset($aClientes["$id"]);

    $jsonClientes = json_encode($aClientes);

    file_put_contents("archivo.txt", $jsonClientes);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="my-3">
                            <label for="">DNI:
                                <input value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["dni"] : ""; ?>" type="text" name="txtDni" id="txtDni" class="form-control">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="">Nombre:
                                <input value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : ""; ?>" type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?>
">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="">Telefono:
                                <input value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["telefono"] : ""; ?>" type="tel" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["telefono"] : "" ?>
">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="">Correo:
                                <input value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["correo"] : ""; ?>" type="email" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["correo"] : "" ?>
">
                            </label>
                        </div>
                        <div class="my-3">
                            Archivo adjunto: <br>
                            <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-6">
                    <table class="table table-hover border">
                        <tbody>
                            <tr>
                                <th>Imagen</th>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                            <?php
                            foreach ($aClientes as $indice => $cliente) : ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $cliente["dni"]; ?></td>
                                    <td><?php echo $cliente["nombre"]; ?></td>
                                    <td><?php echo $cliente["correo"]; ?></td>
                                    <td style="width: 110px;">
                                        <a href="index.php?id=<?php echo $indice; ?>"><i class="fas fa-edit"></i></a>
                                        <a class="p-1 icono-rojo" href="index.php?id=<?php echo $indice; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>

                                    </td>

                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                    <a href="index.php"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if ($_POST) {

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario != "" && $clave != "") {
        header("Location: acceso_confirmado.php");
    
    } else {
        echo "Valido para usuarios registrados";
    } 
    exit; 
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST">

                    <div class="row justify-content-end">
                        <div class="col-sm-12 col-12 mt-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <input type="text" id="txtUsuario" name="txtUsuario" class="form-control shadow" placeholder="Usuario">
                                </div>
                                <div class="mb-3">
                                    <input type="email" id="txtClave" name="txtClave" class="form-control shadow" placeholder="Clave">
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn">ENVIAR</button>
                                </div>
                            </form>

                        </div>
                    </div>
</body>

</html>
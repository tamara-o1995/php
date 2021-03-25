<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor= rand (1,5);
if ($valor== 1 || $valor == 3 || $valor == 5){
    echo "El numero $valor es impar";
}
else{
    echo "El numero $valor es par";
}

?>

<!-- otra manera que se puede hacer es:
$valor= rand (1,5);
if($valor %2 == 0){
    echo "El numero $valor es par"
} else {
    echo "Ell numero $valor impar"
}
-->
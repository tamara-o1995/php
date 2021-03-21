<?php
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
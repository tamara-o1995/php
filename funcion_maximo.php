<?php
$aNotas= array(8, 4, 3, 9, 1);
$aSueldos = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);

function maximo($aArray){
    $max = 0;
    foreach($aArray as $numero){
        if ($numero > $max){
            $max = $numero;
        }
    }
    return $max;
}
echo "La nota maxima es: " . maximo($aNotas) . "<br>";
echo "El sueldo maximo es: " . maximo($aSueldos);

?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$hr=21;
$min=10;
echo '------Mostrar en pantalla la hora "La Hora es 21:10 hs."------';
echo "<h3>La Hora es ".$hr.":".$min." hs.</h3>";

echo '------Sumar 60 minutos e ir informando la hora y munitos en pantalla------';
for($i=0; $i<60; $i++){
    
    if($min == 59){
        $min = 00;
        
        if($hr == 23){
            $hr = 00;
        } else {
            $hr++;
        }    
    }else{
        $min++;
    }
    echo "<h3>-La Hora es ".$hr.":".$min." hs.</h3></br>";
   
}

// Otra forma de hacerlo: 

// for ($i=0; $i < 60; $i++){
//     echo "la hora es $hr:$min <br>";
//     $min++;
//     if ($min == 60){
//         $min = 0;
//         $hr++;
//     }
//     if($hr == 24){
//         $hr=0;
//     }
// }
// echo "La hora es $hr:$min <br>";
// ?>



echo '------Modificar el ejercicio para que la variable $hr sea 23------';

for ($i=0; $i<50; $i++){
    
    if($min == 59){
        $min = 00;
        
        if($hr == 23){
            $hr = 00;
        } else {
            $hr++;
        }    
    }else{
        $min++;
    }
 
}   
echo "<h3>-La Hora es ".$hr.":".$min." hs.</h3></br>";

echo '------Probar que el ejercicio muestre 0:10------';
for($i=0; $i<70; $i++){
    
    if($min == 59){
        $min = 00;
        
        if($hr == 23){
            $hr = 00;
        } else {
            $hr++;
        }    
    }else{
        $min++;
    }
 
}   
echo "<h3>-La Hora es ".$hr.":".$min." hs.</h3></br>";

echo '------Modificar la definicion de la hora para que sea hora actual------';

echo "Fecha y Hora actual: ".date("d/m/Y H:i")."<br></br>";
$hora = date("H");
$minuto = date("i");

echo $hora.":".$minuto;

?>


<!-- Otra forma de hacerlo: 



-->


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNotas = array (9, 8, 9.50, 4, 7, 8);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre y apellido" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre y apellido" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre y apellido" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79
);
$aPacientes [] = array(
    "dni" => "23.684.385",
    "nombre y apellido" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79
);

$aProductos = array();
$aProductos[0] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[1] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[2] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);
$aProductos[3] = array("nombre" => "Impresora hp laser",
                   "marca" => "hp",
                   "modelo" => "553AIQ1201E",
                   "stock" => 5,
                   "precio" => 20000,                  
);


function contar ($aArray){
   $cont = 0;
   foreach ($aArray as $item){
           $cont++;
   }   
   return $cont;  
}

echo "Cantidad de productos: " . contar($aProductos) . "<br>";
echo "Cantidad de pacientes: " . contar($aPacientes) . "<br>";
echo "Cantidad de notas: " . contar($aNotas);

?>

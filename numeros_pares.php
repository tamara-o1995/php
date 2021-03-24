<?php
echo "<p>Ejercicio 1</p>";
echo "<ul>";
for($i=1; $i<101; $i++){
echo "<li>".$i."</li>";
    
}
echo "</ul>";
// otra forma seria
// for ($i= 1; $i <= 100; $i++){
//     echo $1;
// }


echo "<p>Ejercicio 2</p>";
echo "<ul>";
for($i=0; $i<101; $i+=2){
echo "<li>".$i."</li>";
    
}
echo "</ul>";

// otra forma seria
// for ($i = 2; $i <= 100; $i +=2){
//     echo $i . "<br>";
// }


echo "<p>Ejercicio 3</p>";
echo "<ul>";
for($i=0; $i<101; $i+=2){
    echo "<li>".$i."</li>";
    if($i==60){
        break;
    }
}
echo "</ul>";
?>

<!-- otra forma seria
for ($i = 2; $i <= 100; $i +=2){
    echo $i . "<br>";
    if ($i == 60){
        break;
    }
} -->

<?php
// Definir la variable de entero y flotante
$entero = 7; 
$flotante = 4.3; 

// Mostrar tipo de dato de cada variable
echo "El tipo de dato de \$entero es: " . gettype($entero) . "<br>";
echo "El tipo de dato de \$flotante es: " . gettype($flotante) . "<br>";

// Realizar operación matemática simple (suma)
$suma = $entero + $flotante;
echo "El resultado de la suma de \$entero y \$flotante es: $suma<br>";

// Mostrar la diferencia al multiplicar por 10
$entero_por_diez = $entero * 10;
$flotante_por_diez = $flotante * 10;

echo "\$entero * 10 = $entero_por_diez<br>";
echo "\$flotante * 10 = $flotante_por_diez<br>";
?>
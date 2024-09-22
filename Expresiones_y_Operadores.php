<?php
// Declarar los dos numeros
$numero1 = 6;
$numero2 = 2;

// Operaciones aritméticas
echo "Suma: $numero1 + $numero2 = " . ($numero1 + $numero2) . "<br>";
echo "Resta: $numero1 - $numero2 = " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: $numero1 * $numero2 = " . ($numero1 * $numero2) . "<br>";
echo "División: $numero1 / $numero2 = " . ($numero1 / $numero2) . "<br>";
echo "Módulo (Resto de la división): $numero1 % $numero2 = " . ($numero1 % $numero2) . "<br>";

// Operadores de comparación
echo "¿$numero1 > $numero2? " . var_export($numero1 > $numero2, true) . "<br>";
echo "¿$numero1 < $numero2? " . var_export($numero1 < $numero2, true) . "<br>";
echo "¿$numero1 >= $numero2? " . var_export($numero1 >= $numero2, true) . "<br>";
echo "¿$numero1 <= $numero2? " . var_export($numero1 <= $numero2, true) . "<br>";
echo "¿$numero1 == $numero2? " . var_export($numero1 == $numero2, true) . "<br>";
echo "¿$numero1 != $numero2? " . var_export($numero1 != $numero2, true) . "<br>";

// Operadores lógicos
echo "¿($numero1 > 5) && ($numero2 < 5)? " . var_export(($numero1 > 5) && ($numero2 < 5), true) . "<br>";
echo "¿($numero1 < 5) || ($numero2 < 5)? " . var_export(($numero1 < 5) || ($numero2 < 5), true) . "<br>";
echo "¿!($numero1 == $numero2)? " . var_export(!($numero1 == $numero2), true) . "<br>";
?>
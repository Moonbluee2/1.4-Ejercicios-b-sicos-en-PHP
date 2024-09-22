<?php
// Declarar las variables
$edad = 21; 
$nombre = "Yeisy"; 
$es_estudiante = true; // true si eres estudiante, false si no lo eres

// Mostrar los valores en una oración
echo "Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($es_estudiante ? 'Sí' : 'No') . ".<br>";

// Modificar el valor de una variable (por ejemplo, cambiar la edad)
$edad = 22; 

// Mostrar la nueva información actualizada
echo "Mi nombre es $nombre, ahora tengo $edad años y soy estudiante: " . ($es_estudiante ? 'Sí' : 'No') . ".<br>";
?>
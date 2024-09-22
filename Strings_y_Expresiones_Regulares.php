<?php
// Definir las variable
$correo = "test_user@example.com";

// Usar interpolación para insertar el correo en una oración
echo "El correo electrónico proporcionado es: $correo<br>";

// Crear una expresión regular para validar si el string es un correo electrónico válido
$expresion_regular = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Usar preg_match() para verificar si el correo es válido
if (preg_match($expresion_regular, $correo)) {
    echo "El correo es válido.<br>";
} else {
    echo "El correo no es válido.<br>";
}

// Utilizar substr() para extraer solo el nombre de usuario del correo
$nombre_usuario = substr($correo, 0, strpos($correo, '@'));
echo "El nombre de usuario es: $nombre_usuario<br>";
?>
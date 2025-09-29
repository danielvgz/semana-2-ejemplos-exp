<?php
// Ejemplo de código multiplataforma en PHP

echo "Sistema Operativo: " . PHP_OS . "<br>";
echo "Separador de directorios: " . DIRECTORY_SEPARATOR . "<br>";

// Concatenar rutas de forma universal
$ruta = "carpeta" . DIRECTORY_SEPARATOR . "archivo.txt";
echo "Ruta universal: $ruta<br>";
?>

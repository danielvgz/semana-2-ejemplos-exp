<?php
// Ejemplo de gestión automática de memoria en PHP

// Crear un array grande para simular uso intensivo de memoria
$bigArray = range(1, 1000000);
echo "Memoria usada: " . memory_get_usage() . " bytes<br>";

// Liberar manualmente (opcional, PHP lo haría automáticamente al final)
unset($bigArray);
echo "Memoria después de liberar: " . memory_get_usage() . " bytes<br>";
?>

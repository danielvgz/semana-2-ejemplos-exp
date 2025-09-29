<?php
// Verificar extensiones instaladas y mostrar algunas importantes

$extensiones = get_loaded_extensions();
echo "Extensiones instaladas:<br>";
echo implode(", ", $extensiones) . "<br><br>";

// Ejemplo: verificar si la extensión 'curl' está disponible
if (extension_loaded('curl')) {
    echo "La extensión curl está disponible.<br>";
} else {
    echo "La extensión curl NO está disponible.<br>";
}
?>
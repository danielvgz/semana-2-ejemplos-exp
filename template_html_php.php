<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo PHP + HTML</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <?php
    $usuarios = ["Ana", "Luis", "Carlos"];
    if (count($usuarios) > 0) {
        echo "<ul>";
        foreach($usuarios as $usuario){
            echo "<li>$usuario</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay usuarios registrados.</p>";
    }
    ?>
</body>
</html>
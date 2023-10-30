<?php
$nombre = "Aleix";
$descripcion = "Un gran apasionado por la informatica i los videojuegos";

// Ultilizaremos la sintaxis heredoc para crear un bloque de HTML
$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Mi Perfil</title>
</head>
<body>
    <h1>Mi Perfil</h1>
    <p>Nombre: $nombre</p>
    <p>Descripción: $descripcion</p>
</body>
</html>
HTML;

echo $html;

// Consultaremos SQL mediante la sintacis heredoc
$consultaSQL = <<<SQL
SELECT * FROM usuarios;
SQL;

echo $consultaSQL;
?>

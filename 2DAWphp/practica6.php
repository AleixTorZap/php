<?php
$nombre = "Aleix";
$producto = "mando ps5 ";
$descripcion = "Un mando incrible para jugar a videojuegos";

// Bloque de introducción con sintaxis nowdoc
$introduccion = <<<'INTRO'
¡Hola, soy $nombre! Bienvenido a mi aplicación personalizada.
INTRO;

echo $introduccion . "<br>";

// Bloque de información sobre el producto con sintaxis nowdoc
$infoProducto = <<<'INFO'
Producto: $producto
Descripción: $descripcion
INFO;

echo $infoProducto;
?>

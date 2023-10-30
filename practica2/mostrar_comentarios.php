<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Comentarios</title>
</head>
<body>
    <h1>Comentarios de Usuarios</h1>
    <?php
    $comentarios = array(
        "¡Gran sitio web!",
        "Me encantan tus publicaciones.",
        "Gracias por compartir.",
    );
    
    // Utiliza un bucle foreach para recorrer los comentarios
    foreach ($comentarios as $comentario) {
        echo "<p>$comentario</p>";
    }
    ?>
</body>
</html>

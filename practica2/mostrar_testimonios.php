<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Testimonios</title>
</head>
<body>
    <h1>Testimonios de Clientes</h1>

    <?php
    // Declara un array de testimonios
    $testimonios = array(
        "Excelente servicio, ¡los recomiendo!",
        "Muy satisfecho con su trabajo.",
        "Profesionales y eficientes.",
        "El mejor servicio que he recibido.",
    );

    // Utiliza un bucle foreach para mostrar los testimonios en etiquetas de párrafo
    foreach ($testimonios as $testimonial) {
        echo "<p>$testimonial</p>";
    }
    ?>

</body>
</html>

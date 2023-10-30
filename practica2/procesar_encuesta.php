<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Encuesta</title>
</head>
<body>
    <h1>Resultado de la Encuesta</h1>
    <?php
    $opcionSeleccionada = $_POST["opcion"];
    $opciones = array("opcion1", "opcion2", "opcion3");

    foreach ($opciones as $opcion) {
        if ($opcionSeleccionada === $opcion) {
            echo "<p>Has seleccionado: $opcionSeleccionada</p>";
            break;
        }
    }

    if ($opcionSeleccionada === "ninguna") {
        echo "<p>Seleccionaste 'Ninguna de las anteriores'. ¡Gracias por participar en la encuesta!</p>";
    }
    ?>
</body>
</html>

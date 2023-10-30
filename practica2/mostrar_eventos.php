<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Eventos</title>
</head>
<body>
    <h1>Próximos Eventos</h1>
    <?php
    $eventos = array(
        array("nombre" => "Evento 1", "fecha" => "2023-11-10"),
        array("nombre" => "Evento 2", "fecha" => "2023-12-25"),
        array("nombre" => "Evento 3", "fecha" => "2024-01-05"),
    );

    $fechaActual = date('Y-m-d'); // Obtiene la fecha actual en el formato 'YYYY-MM-DD'

    foreach ($eventos as $evento) {
        $fechaEvento = $evento['fecha'];

        // Compara la fecha del evento con la fecha actual
        if ($fechaEvento < $fechaActual) {
            continue; // Si la fecha del evento es anterior a la fecha actual, omitir el evento
        }

        // Imprime el nombre y la fecha del evento
        echo "<p>Nombre: " . $evento['nombre'] . "</p>";
        echo "<p>Fecha: " . $evento['fecha'] . "</p>";
    }
    ?>
</body>
</html>

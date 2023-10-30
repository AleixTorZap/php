<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén el valor seleccionado del día de la semana desde el formulario
    $diaSemana = $_POST["diaSemana"];

    // Utiliza una declaración "switch" para mostrar el horario de atención correspondiente.
    switch ($diaSemana) {
        case 1:
            $horario = "9:00 AM - 5:00 PM"; // Lunes
            break;
        case 2:
            $horario = "9:00 AM - 5:00 PM"; // Martes
            break;
        case 3:
            $horario = "9:00 AM - 5:00 PM"; // Miércoles
            break;
        case 4:
            $horario = "9:00 AM - 5:00 PM"; // Jueves
            break;
        case 5:
            $horario = "9:00 AM - 5:00 PM"; // Viernes
            break;
        case 6:
            $horario = "10:00 AM - 2:00 PM"; // Sábado
            break;
        case 7:
            $horario = "Cerrado"; // Domingo
            break;
        default:
            $horario = "Día no válido"; // Manejo de días no válidos.
    }

    // Imprime el horario de atención.
    echo "El horario de atención para el día seleccionado es: $horario";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén el valor seleccionado del nivel de dificultad desde el formulario
    $nivelDificultad = $_POST["nivelDificultad"];

    // Utilizaremos un els if para saber el nivel de prioridad
    if ($nivelDificultad == 1) {
        $prioridad = "Baja";
    } elseif ($nivelDificultad == 2) {
        $prioridad = "Media";
    } elseif ($nivelDificultad == 3) {
        $prioridad = "Alta";
    } else {
        $prioridad = "N/A"; // Si el nivel de dificultad no es valido
        
    }

    // Imprime un mensaje con la prioridad asignada.
    echo "La prioridad de la tarea con nivel de dificultad $nivelDificultad es: $prioridad.";
}


?>
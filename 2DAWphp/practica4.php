<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $tareas = "Comprar leche,Estudiar para el examen,Hacer ejercicio,Preparar la cena";

// Dividir la cadena en un array utilizando la coma como delimitador
    $array = explode(",", $tareas);
//printaremos cada parte del array separandolos con br
    echo $array[0];
    echo"<br>";
    echo $array[1];
    echo"<br>";
    echo $array[2];
    echo"<br>";
    echo $array[3];
    echo"<br>";
    echo"<br>";

    $mensaje = " ¡Hola a todos! ";
    //usaremos trim() para quitar los espacios de delante i atras de la frase
    $mensaje2 = trim($mensaje);
    echo  $mensaje;
?>
</body>
</html>
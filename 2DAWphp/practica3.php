<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $texto = "¡Hola a todos, bienvenidos al mundo del desarrollo web!"  ;  
    //con sbstr extraeremos de la frase la palabra texto
    $texto2 = substr($texto , 9 , 5);
    echo $texto2;

    echo"<br>";
    echo"<br>";
    
    $frase = "Mi gato es negro y mi perro es blanco";
    //utilizaremos str_replace para caviar la palabra negro a gris
    $nuevaFrase = str_replace("negro", "gris", $frase);
    echo $nuevaFrase;

    echo"<br>";
    echo"<br>";

    $texto = "¡Hola a todos, bienvenidos al mundo del desarrollo web!";
    //usaremos strpos para calcular la posicion de bienvenidos
    $posicion = strpos($texto, "bienvenidos");
    echo "La primera aparición de 'bienvenidos' comienza en la posición: " . $posicion;

    echo"<br>";
    echo"<br>";

    $frase = "Aprendiendo PHP es emocionante.";
    //usaremos stristr para buscar la palabra php
    $resultado = stristr($frase, "php");
    echo $resultado;




?>
</body>
</html>
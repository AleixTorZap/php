<?php 
    //declaramos la variable nombre autor.
    $nombreAutor = 'Aleix';
    //declaramos la constante fecha de nacimineto.
    const AÑO_NACIMIENTO = '14/08/2004';

    //declaramos las variables del ejercicio 2
    $edad = 18;
    $altura = 1.81;
    $tieneMascota = true;
    //hacemos una funcion para saber si el tiene o no tiene mascota basandonos en la booleal
    function mascota($tieneMascota){
        if ($tieneMascota == true){
            echo "Si tiene mascota";
        }else {
            echo "No tiene mascota";
        }

    }

    $nombre = 'Aleix';
    $profesion = 'astronauta';

    $frase3 = 'Soy ' .$nombre .' i soy ' .$profesion ;

    //primero declararemos los dos numero
    $numero1 = 6;
    $numero2 = 4;

    //convertimos los numero a cadena usando strval
    $cadena1 = strval($numero1);
    $cadena2 = strval($numero2);

    
    // convertimos las cadenas nuevamente a números usando doubleval
    $num1 = doubleval($cadena1);
    $num2 = doubleval($cadena2);
    //hacemos las operaciones
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion= $num1 * $num2;
    $division = $num1 / $num2;

    //ej5
    //declaralaramos la variable como null i hacemos una funcion para que 
    //si esta null te diga una cosa i si es un colo el color
    $colorFavorito = null;

             function color($colorFavorito){
                if ($colorFavorito !== null){
                    echo "Tu color favorito es $colorFavorito" ;
                }else {
                    echo "No has elegido un color favorito aún"; 
                    
                }
            }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ej1 -->
    <h1>El autor <?= $nombreAutor ?> nació en el año <?= AÑO_NACIMIENTO ?></h1> <!-- Aqui diremo la frase con las variables anteriores -->
    <!-- ej2 -->
    <h1>Tu tienes <?= $edad ?> años i mides <?= $altura ?>m de altura </h1> <!-- Aqui diremo la frase con las variables anteriores -->
    <h1><?= mascota($tieneMascota) ?> </h1>

    <!-- ej3 -->
    <h1><?= $frase3 ?> </h1>


    <!-- ej4 -->
    <!-- Aqui pondremos todas las operaciones con los numeros de las operaciones -->
    <h1>La suma de <?= $num1?> + <?= $num2?> es <?= $suma ?> </h1>
    <h1>La resta de <?= $num1?> - <?= $num2?> es <?= $resta ?> </h1>
    <h1>La multiplicacion de <?= $num1?> * <?= $num2?> es <?= $multiplicacion ?> </h1>
    <h1>La division de <?= $num1?> / <?= $num2?> es <?= $division ?> </h1>
   
    <!-- ej5 -->
    <!-- ejecutamos la funcion -->
    <h1><?= color($colorFavorito) ?> </h1>

</body>
</html>



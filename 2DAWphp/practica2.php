<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //declaramos el texto que queremos que cuente los caracteres
    $parrafo = "Me gusta mucho ir a correr";
    echo $parrafo;

    echo"<br>";
    //utilizamo strlen()
    $parrafo2 = strlen($parrafo);
    //hacemos un echo donde nos dice los caracteres de la frase anterior
    echo "El texto anterior tiene $parrafo2 caracteres";

    echo"<br>";
    echo"<br>";
    // Utilizamos strtolower para poner la siguiente frase entera en minusculas
    $texto = strtolower("PHP es Genial!");
    echo $texto;
    echo"<br>";
    echo"<br>";
    //Utilizamos strtoupper para poner la siguiente frase en mayusculas
    $texto2 =strtoupper("¡Bienvenido a Mi Sitio Web!");
    echo $texto2;
    echo"<br>";
    echo"<br>";
    //Utilizamos ucfirst para que la primera letra se ponga en mayusculas
    $nombre =  ucfirst("maria");
    echo $nombre;
    echo"<br>";
    echo"<br>";
    //utilizamos ucwords para poner la primera letra de cada palabra en mayusculas
    $parrafo2 = ucwords("aprendiendo desarrollo web desde cero");
    echo $parrafo2;
?>
</body>
</html>